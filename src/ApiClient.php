<?php

namespace BjoernrDe\SslLabs;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use Psr\Http\Message\ResponseInterface;

/**
 * ApiClient
 */
class ApiClient {
    const DEFAULT_BASE_URL = 'https://api.ssllabs.com/api/v2/';
    const DEV_BASE_URL = 'https://api.dev.ssllabs.com/api/v2/';
    
    private $httpClient;
    private $honorRateLimiting = true;
    private $hydrateResponses = true;
    private $fullReports = true;
    private $ignoreMismatches = false;
    private $publishResults = false;
    private $cachedResultTtl = 750;
    
    const MAX_ASSESSMENTS_HEADER = 'X-Max-Assessments';
    const CURRENT_ASSESSMENTS_HEADER = 'X-Current-Assessments';
    
    private $maxAssessments = 25;
    private $currentAssessments = 0;
    private $nextAssessmentCoolOff = 1;
    private $nextAssessment;
    
    public function __construct($baseUrl = self::DEFAULT_BASE_URL) {
        $this->setBaseUrl($baseUrl);
        $this->getApiInformation();
    }
    
    /* -------------------
     * -------------------
     * --  API METHODS  --
     * -------------------
     * -------------------
     */
    
    /**
     * This call should be used to check the availability of the SSL Labs
     * servers, retrieve the engine and criteria version, and initialize
     * the maximum number of concurrent assessments.
     * 
     * @return string|\BjoernrDe\SslLabs\Model\ApiInfo
     */
    public function getApiInformation() {
        $response = $this->sendApiRequest('info');
        
        if ($this->hydrateResponses) {
            $response = new Model\ApiInfo($response);
            
            $this->nextAssessmentCoolOff = $response->getNewAssessmentCoolOff();
            
            if (!$this->nextAssessment instanceof \DateTime) {
                $this->nextAssessment = new \DateTime;
            }
        }
        
        return $response;
    }
    
    /**
     * This call is used to initiate an assessment, or to retrieve the status
     * of an assessment in progress or in the cache.
     * 
     * @param string $host
     * @param bool $startNew
     * @param bool $fromCache
     * @return string|\BjoernrDe\SslLabs\Model\Host
     * @throws \InvalidArgumentException If invalid host provided
     */
    public function getHostInformation($host, $startNew = false) {
        if (empty($host) || filter_var("https://$host/", FILTER_VALIDATE_URL) === false) {
            throw \InvalidArgumentException("The host you want to assess must be provided and valid.");
        }
        
        $this->checkRateLimit();
        $response = $this->sendApiRequest(
            'analyze',
            [
                'host'           => $host,
                'publish'        => $this->publishResults,
                'startNew'       => $startNew,
                'fromCache'      => !$startNew,
                'maxAge'         => $this->cachedResultTtl,
                'all'            => ($this->fullReports === true) ? 'done' : false,
                'ignoreMismatch' => $this->ignoreMismatches
            ]
        );
        
        if ($this->hydrateResponses) {
            $response = new Model\Host($response);
        }
        return $response;
    }
    
    /**
     * This call is used to retrieve detailed endpoint information. This call
     * doesn't start new assessments, even when a cached report is not found.
     * 
     * @param string $host
     * @param string $endpoint
     * @return string|\BjoernrDe\SslLabs\Model\Endpoint
     * @throws \InvalidArgumentException
     */
    public function getEndpointInformation($host, $endpoint) {
        if (empty($host) || filter_var("https://$host/", FILTER_VALIDATE_URL) === false) {
            throw \InvalidArgumentException("The host you want to assess must be provided and valid.");
        }
        
        if (empty($endpoint) || filter_var($endpoint, FILTER_VALIDATE_IP) === false) {
            throw \InvalidArgumentException("The endpoint you want to assess must be provided and be a valid IP address.");
        }
        
        $response = $this->sendApiRequest(
            'getEndpointData',
            [
                'host'           => $host,
                's'        => $endpoint
            ]
        );
        
        if ($this->hydrateResponses) {
            $response = new Model\Endpoint($response);
        }
        return $response;
    }
    
    /**
     * Get known assessment status codes
     * 
     * @return string|\BjoernrDe\SslLabs\Model\StatusCodes
     */
    public function getStatusCodes() {
        $response = $this->sendApiRequest('getStatusCodes');
        
        if ($this->hydrateResponses) {
            $response = json_decode($response);
        }
        return $response;
    }
    
    /* --------------------
     * --------------------
     * --    SETTINGS    --
     * --------------------
     * --------------------
     */
    
    /**
     * Set the base URL for the Client.
     * You should pass one of:
     *  - A full URL endpoint
     *  - 'dev' to use the development endpoint
     *  - An empty string to use the current default production endpoint
     * 
     * @param string $url
     * @return \BjoernrDe\SslLabs\ApiClient
     */
    public function setBaseUrl($url) {
        if (empty($url)) {
            $baseUrl = self::DEFAULT_BASE_URL;
        } else if (strtolower($url) === 'dev') {
            $baseUrl = self::DEV_BASE_URL;
        } else if (filter_var($url, FILTER_VALIDATE_URL) !== false) {
            $baseUrl = rtrim($url, '/') . '/';
        } else {
            throw new \InvalidArgumentException($url . ' is not a valid base URL.');
        }
        
        $this->httpClient = new Client([
            'base_uri' => $baseUrl,
            'on_headers' => [$this, 'updateRateLimitInfo'],
            'timeout' => 10
        ]);
        
        return $this;
    }
    
    /**
     * Should the API client check on and honor rate limits?
     * You should leave this on to protect yourself and the Qualys API,
     * unless you absolutely know what you are doing.
     * 
     * Default: true
     * 
     * @param bool $setting
     * @return \BjoernrDe\SslLabs\ApiClient
     */
    public function setHonorRateLimiting($setting) {
        $this->honorRateLimiting = (bool) $setting;
        
        return $this;
    }
    
    /**
     * Should the API client construct objects based on responses from
     * the Qualys API?
     * 
     * Setting to false can improve performance, but you will have to
     * manually parse the JSON responses to retieve the data you want.
     * 
     * Default: true
     * 
     * @param bool $setting
     * @return \BjoernrDe\SslLabs\ApiClient
     */
    public function setHydrateResponses($setting) {
        $this->hydrateResponses = (bool) $setting;
        
        return $this;
    }
    
    /**
     * Should we request full report details from the Qualys API?
     * 
     * Setting to false can improve performance, but only summary data will
     * be available about the hosts you assess.
     * 
     * Default: true
     * 
     * @param bool $setting
     * @return \BjoernrDe\SslLabs\ApiClient
     */
    public function setFullReports($setting) {
        $this->fullReports = (bool) $setting;
        
        return $this;
    }
    
    /**
     * Should we instruct Qualys to continue any assessments we submit, even if
     * the certificate does not match the hostname assessed?
     * 
     * You should leave this on to protect yourself and the Qualys API from
     * undesired load in the case of human error. However, if testing a host
     * that knowingly has a certificate mismatch, this needs to be set to true
     * 
     * Default: false
     * 
     * @param bool $setting
     * @return \BjoernrDe\SslLabs\ApiClient
     */
    public function setIgnoreMismatches($setting) {
        $this->ignoreMismatches = (bool) $setting;
        
        return $this;
    }
    
    /**
     * Should we allow Qualys to post the results of our assessments publicly?
     * 
     * Default: false
     * 
     * @param bool $setting
     * @return \BjoernrDe\SslLabs\ApiClient
     */
    public function setPublishResults($setting) {
        $this->publishResults = (bool) $setting;
        
        return $this;
    }
    
    /**
     * What is the maximum age of a cached assessment we trust? (in hours)
     * 
     * When fetching cached assessments, if the assessment is older that this
     * many hours, the API client will instruct Qualys to begin a new assessment.
     * 
     * Increasing the value of this option will improve performance, but will
     * increase the risk of returning an out-of-date response.
     * 
     * Default: 750 hours (roughly a month)
     * 
     * @param int $hours
     * @return \BjoernrDe\SslLabs\ApiClient
     */
    public function setCachedResultTtl($hours) {
        $this->cachedResultTtl = (int) $hours;
        
        return $this;
    }
    
    /* -------------------
     * -------------------
     * --   INTERNALS   --
     * -------------------
     * -------------------
     */
    
    /**
     * Send API request
     * 
     * @param string $apiCall
     * @param array $parameters
     * @return string JSON from API
     */
    private function sendApiRequest($apiCall, $parameters = [])
    {
        try {
            $response = $this->httpClient->get(
                $apiCall,
                [
                    'query' => $parameters
                ]
            );
            
            return $response->getBody();
        } catch (BadResponseException $e) {
            throw Exception\ExceptionHelper::transformGuzzleException($e);  
        }
    }
    
    /**
     * Updates the client's rate limit information based on a response
     * 
     * @param ResponseInterface $response
     */
    public function updateRateLimitInfo(ResponseInterface $response) {
        if ($response->hasHeader(self::MAX_ASSESSMENTS_HEADER)) {
            $this->maxAssessments = (int) $response->getHeaderLine(self::MAX_ASSESSMENTS_HEADER);
        }
        
        if ($response->hasHeader(self::CURRENT_ASSESSMENTS_HEADER)) {
            $this->currentAssessments = (int) $response->getHeaderLine(self::CURRENT_ASSESSMENTS_HEADER);
        }

        $this->nextAssessment = new \DateTime('+ ' . $this->nextAssessmentCoolOff . ' seconds');
    }
    
    /**
     * Checks if we may exceed a rate limit when starting a new assessment
     * 
     * @throws Exception\TooManyAssessmentsException
     * @throws Exception\AssessmentCooldownExceededException
     */
    private function checkRateLimit() {
        if (!$this->honorRateLimiting) {
            return;
        }
        
        if ($this->currentAssessments >= $this->maxAssessments) {
            //Call for info and check again in case an assessment has finished since we last updated state
            $this->getApiInformation();
            
            if ($this->currentAssessments >= $this->maxAssessments) {
                throw new Exception\TooManyAssessmentsException($this->maxAssessments);
            }
        }
        
        if (new \DateTime() > $this->nextAssessment) {
            return;
        }
        
        throw new Exception\AssessmentCooldownExceededException($this->nextAssessment);
    }

}
