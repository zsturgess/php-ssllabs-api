<?php

namespace BjoernrDe\SSLLabsApi\Model;

/**
 * SSLLabs Host object.
 *
 * @author Björn Roland
 *
 * @see https://github.com/ssllabs/ssllabs-scan/blob/master/ssllabs-api-docs.md#host
 */
class Host extends ApiObject
{
    /**
     * Host that will be checked.
     * 
     * @var string
     */
    private $host;

    /**
     * Port.
     * 
     * @var int
     */
    private $port;

    /**
     * Protocol.
     * 
     * @var string
     */
    private $protocol;

    /**
     * True if the assessment is public (and listed on the SSLLabs assessments board).
     *
     * @var bool
     */
    private $isPublic;

    /**
     * Assessment status.
     * 
     * @var string
     */
    private $status;

    /**
     * Status message ; When status is error this contains an error message.
     * 
     * @var string
     */
    private $statusMessage;

    /**
     * startMessage
     * TODO: Not documented in current API doc v1.20.17.
     * 
     * @var string
     */
    private $startMessage;

    /**
     * Assessment start time (Unix timestamp; milliseconds since 1970).
     * 
     * @var int
     */
    private $startTime;

    /**
     * Assessment completion time (Unix timestamp; milliseconds since 1970).
     * 
     * @var int
     */
    private $testTime;

    /**
     * Assessment engine version.
     * 
     * @var string
     */
    private $engineVersion;

    /**
     * Criteria version.
     * 
     * @var string
     */
    private $criteriaVersion;

    /**
     * Time when assessment result will expire from cache.
     *
     * @var string
     */
    private $cacheExpiryTime;

    /**
     * List of Endpoint objects.
     * 
     * @var array
     *
     * @see \SSLLabsApi\Objects\Endpoint
     */
    private $endpoints = array();

    /**
     * List of certificate hostnames.
     * 
     * @var array
     */
    private $certHostnames = array();

    /**
     * Get host.
     * 
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set host.
     * 
     * @param string $host
     */
    protected function setHost($host)
    {
        $this->host = (string) $host;
    }

    /**
     * Get port.
     * 
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set port.
     * 
     * @param int $port
     */
    protected function setPort($port)
    {
        $this->port = (int) $port;
    }

    /**
     * Get protocol.
     * 
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Set protocol.
     * 
     * @param string $protocol
     */
    protected function setProtocol($protocol)
    {
        $this->protocol = $protocol;
    }

    /**
     * Get isPublic.
     * 
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->isPublic;
    }

    /**
     * Set isPublic.
     * 
     * @param bool $isPublic
     */
    protected function setIsPublic($isPublic)
    {
        $this->isPublic = (boolean) $isPublic;
    }

    /**
     * Get status.
     * 
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status.
     * 
     * @param string $status
     */
    protected function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status message.
     * 
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    /**
     * Set status message.
     * 
     * @param string $statusMessage
     */
    protected function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
    }

    /**
     * Get start message.
     * 
     * @return string
     */
    public function getStartMessage()
    {
        return $this->startMessage;
    }

    /**
     * Set start message.
     * 
     * @param string $startMessage
     */
    protected function setStartMessage($startMessage)
    {
        $this->startMessage = $startMessage;
    }

    /**
     * Get start time.
     * 
     * @return int
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set start time.
     * 
     * @param int $startTime
     */
    protected function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * Get test time.
     * 
     * @return int
     */
    public function getTestTime()
    {
        return $this->testTime;
    }

    /**
     * Set test time.
     * 
     * @param int $testTime
     */
    protected function setTestTime($testTime)
    {
        $this->testTime = $testTime;
    }

    /**
     * Get engine version.
     * 
     * @return string
     */
    public function getEngineVersion()
    {
        return $this->engineVersion;
    }

    /**
     * Set engine version.
     * 
     * @param string $engineVersion
     */
    protected function setEngineVersion($engineVersion)
    {
        $this->engineVersion = $engineVersion;
    }

    /**
     * Get criteria version.
     * 
     * @return string
     */
    public function getCriteriaVersion()
    {
        return $this->criteriaVersion;
    }

    /**
     * Set criteria version.
     * 
     * @param string $criteriaVersion
     */
    protected function setCriteriaVersion($criteriaVersion)
    {
        $this->criteriaVersion = $criteriaVersion;
    }

    /**
     * Get cache expiry time.
     * 
     * @return string
     */
    public function getCacheExpiryTime()
    {
        return $this->cacheExpiryTime;
    }

    /**
     * Set cache expiry time.
     * 
     * @param string $cacheExpiryTime
     */
    protected function setCacheExpiryTime($cacheExpiryTime)
    {
        $this->cacheExpiryTime = $cacheExpiryTime;
    }

    /**
     * Get endpoints.
     * 
     * @return array
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }

    /**
     * Set endpoints.
     * 
     * @param array $endpoints
     */
    protected function setEndpoints($endpoints)
    {
        $this->endpoints = (array) $endpoints;
    }

    /**
     * Get cert hostnames.
     * 
     * @return array
     */
    public function getCertHostnames()
    {
        return $this->certHostnames;
    }

    /**
     * Set cert hostnames.
     * 
     * @param array $certHostnames
     */
    protected function setCertHostnames($certHostnames)
    {
        $this->certHostnames = $certHostnames;
    }
}
