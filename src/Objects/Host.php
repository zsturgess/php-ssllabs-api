<?php
namespace BjoernrDe\SSLLabsApi\Objects;

/**
 * SSLLabs Host object
 *
 * @author Björn Roland
 * @see https://github.com/ssllabs/ssllabs-scan/blob/master/ssllabs-api-docs.md#host
 */

class Host implements ApiObject
{
	/**
	 * Host that will be checked
	 * 
	 * @var string $host
	 */
	private $host;
	
	/**
	 * Port
	 * 
	 * @var int $port
	 */
	private $port;
	
	/**
	 * Protocol
	 * 
	 * @var string $protocol
	 */
	private $protocol;
	
	/**
	 * True if the assessment is public (and listed on the SSLLabs assessments board)
	 * @var boolean $isPublic
	 */
	private $isPublic;
	
	/**
	 * Assessment status
	 * 
	 * @var string $status
	 */
	private $status;
	
	/**
	 * Status message ; When status is error this contains an error message
	 * 
	 * @var string $statusMessage
	 */
	private $statusMessage;
	
	/**
	 * startMessage
	 * TODO: Not documented in current API doc v1.20.17
	 * 
	 * @var string $startMessage
	 */
	private $startMessage;
	
	/**
	 * Assessment start time (Unix timestamp; milliseconds since 1970)
	 * 
	 * @var int $startTime
	 */
	private $startTime;
	
	/**
	 * Assessment completion time (Unix timestamp; milliseconds since 1970)
	 * 
	 * @var int $testTime
	 */
	private $testTime;
	
	/**
	 * Assessment engine version
	 * 
	 * @var string $engineVersion
	 */
	private $engineVersion;
	
	/**
	 * Criteria version
	 * 
	 * @var string $criteriaVersion
	 */
	private $criteriaVersion;
	
	/**
	 * Time when assessment result will expire from cache
	 * @var string $cacheExpiryTime
	 */
	private $cacheExpiryTime;
	
	/**
	 * List of Endpoint objects
	 * 
	 * @var array $endpoints
	 * @see \SSLLabsApi\Objects\Endpoint
	 */
	private $endpoints = array();
	
	/**
	 * List of certificate hostnames
	 * 
	 * @var array $certHostnames
	 */
	private $certHostnames = array();
	
	/**
	 * Get host
	 * 
	 * @return string
	 */
	public function getHost()
	{
		return ($this->host);
	}
	
	/**
	 * Set host
	 * 
	 * @param string $host
	 */
	private function setHost($host)
	{
		$this->host = (string) $host;
	}
	
	/**
	 * Get port
	 * 
	 * @return int
	 */
	public function getPort()
	{
		return ($this->port);
	}
	
	/**
	 * Set port
	 * 
	 * @param int $port
	 */
	private function setPort($port)
	{
		$this->port = (int) $port;
	}
	
	/**
	 * Get protocol
	 * 
	 * @return string
	 */
	public function getProtocol()
	{
		return ($this->protocol);
	}
	
	/**
	 * Set protocol
	 * 
	 * @param string $protocol
	 */
	private function setProtocol($protocol)
	{
		$this->protocol = $protocol;
	}
	
	/**
	 * Get isPublic
	 * 
	 * @return boolean
	 */
	public function getIsPublic()
	{
		return ($this->isPublic);
	}
	
	/**
	 * Set isPublic
	 * 
	 * @param boolean $isPublic
	 */
	private function setIsPublic($isPublic)
	{
		$this->isPublic = (boolean) $isPublic;
	}
	
	/**
	 * Get status
	 * 
	 * @return string
	 */
	public function getStatus()
	{
		return ($this->status);
	}
	
	/**
	 * Set status
	 * 
	 * @param string $status
	 */
	private function setStatus($status)
	{
		$this->status = $status;
	}
	
	/**
	 * Get status message
	 * 
	 * @return string
	 */
	public function getStatusMessage()
	{
		return ($this->statusMessage);
	}
	
	/**
	 * Set status message
	 * 
	 * @param string $statusMessage
	 */
	private function setStatusMessage($statusMessage)
	{
		$this->statusMessage = $statusMessage;
	}
	
	/**
	 * Get start message
	 * 
	 * @return string
	 */
	public function getStartMessage()
	{
		return ($this->startMessage);
	}
	
	/**
	 * Set start message
	 * 
	 * @param string $startMessage
	 */
	private function setStartMessage($startMessage)
	{
		$this->startMessage = $startMessage;
	}
	
	/**
	 * Get start time
	 * 
	 * @return int
	 */
	public function getStartTime()
	{
		return ($this->startTime);
	}
	
	/**
	 * Set start time
	 * 
	 * @param int $startTime
	 */
	private function setStartTime($startTime)
	{
		$this->startTime = $startTime;
	}
	
	/**
	 * Get test time
	 * 
	 * @return int
	 */
	public function getTestTime()
	{
		return ($this->testTime);
	}
	
	/**
	 * Set test time
	 * 
	 * @param int $testTime
	 */
	private function setTestTime($testTime)
	{
		$this->testTime = $testTime;
	}
	
	/**
	 * Get engine version
	 * 
	 * @return string
	 */
	public function getEngineVersion()
	{
		return ($this->engineVersion);
	}
	
	/**
	 * Set engine version
	 * 
	 * @param string $engineVersion
	 */
	private function setEngineVersion($engineVersion)
	{
		$this->engineVersion = $engineVersion;
	}
	
	/**
	 * Get criteria version
	 * 
	 * @return string
	 */
	public function getCriteriaVersion()
	{
		return ($this->criteriaVersion);
	}
	
	/**
	 * Set criteria version
	 * 
	 * @param string $criteriaVersion
	 */
	private function setCriteriaVersion($criteriaVersion)
	{
		$this->criteriaVersion = $criteriaVersion;
	}
	
	/**
	 * Get cache expiry time
	 * 
	 * @return string
	 */
	public function getCacheExpiryTime()
	{
		return ($this->cacheExpiryTime);
	}
	
	/**
	 * Set cache expiry time
	 * 
	 * @param string $cacheExpiryTime
	 */
	private function setCacheExpiryTime($cacheExpiryTime)
	{
		$this->cacheExpiryTime = $cacheExpiryTime;
	}
	
	/**
	 * Get endpoints
	 * 
	 * @return array
	 */
	public function getEndpoints()
	{
		return ($this->endpoints);
	}
	
	/**
	 * Set endpoints
	 * 
	 * @param array $endpoints
	 */
	private function setEndpoints($endpoints)
	{
		$this->endpoints = (array)$endpoints;
	}
	
	/**
	 * Get cert hostnames
	 * 
	 * @return array
	 */
	public function getCertHostnames()
	{
		return ($this->certHostnames);
	}
	
	/**
	 * Set cert hostnames
	 * 
	 * @param array $certHostnames
	 */
	private function setCertHostnames($certHostnames)
	{
		$this->certHostnames = $certHostnames;
	}
	
	/**
	 * {@inheritDoc}
	 * 
	 * @return \BjoernrDe\SSLLabsApi\Objects\Host
	 * @see \BjoernrDe\SSLLabsApi\Objects\ApiObject::populateObjectByApiResponse()
	 */
	public function populateObjectByApiResponse($jsonString)
	{
		$response = json_decode($jsonString);
		
		isset($response->host) ? $this->setHost($response->host) : '';
		isset($response->port) ? $this->setPort($response->port) : '';
		isset($response->protocol) ? $this->setProtocol($response->protocol) : '';
		isset($response->isPublic) ? $this->setIsPublic($response->isPublic) : '';
		isset($response->status) ? $this->setStatus($response->status) : '';
		isset($response->startMessage) ? $this->setStartMessage($response->startMessage) : '';
		isset($response->startTime) ? $this->setStartTime($response->startTime) : '';
		isset($response->testTime) ? $this->setTestTime($response->testTime) : '';
		isset($response->engineVersion) ? $this->setEngineVersion($response->engineVersion) : '';
		isset($response->criteriaVersion) ? $this->setCriteriaVersion($response->criteriaVersion) : '';
		
		if(isset($response->endpoints) && count($response->endpoints) > 0)
		{
			$endpointObjects = array();
			
			foreach($response->endpoints as $endpoint)
			{
				$endpointObject = new Endpoint();
				$endpointObject->populateObjectByApiResponse(json_encode($endpoint));
				$endpointObjects[] = $endpointObject;
			}
			
			$this->setEndpoints($endpointObjects);
		}
		
		return ($this);
	}
}