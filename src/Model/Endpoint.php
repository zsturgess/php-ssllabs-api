<?php
namespace BjoernrDe\SSLLabsApi\Model;

class Endpoint extends ApiObject
{
	private $ipAddress;
	private $serverName;
	private $statusMessage;
	private $statusDetails;
	private $statusDetailsMessage;
	private $grade;
	private $gradeTrustIgnored;
	private $hasWarnings;
	private $isExceptional;
	private $progress;
	private $duration;
	private $eta;
	private $delegation;
	private $details = array();
	
	/**
	 * Get endpoint ip address (in IPv4 or IPv6 format)
	 * 
	 * @return string
	 */
	public function getIpAddress()
	{
		return ($this->ipAddress);
	}
	
	/**
	 * Set endpoint ip address (in IPv4 or IPv6 format)
	 * 
	 * @param string $ipAddress
	 */
	protected function setIpAddress($ipAddress)
	{
		$this->ipAddress = (string) $ipAddress;
	}
	
	/**
	 * Get sever name (reverse DNS entry)
	 * 
	 * @return string
	 */
	public function getServerName()
	{
		return ($this->serverName);
	}
	
	/**
	 * Set server name
	 * 
	 * @param string $serverName
	 */
	protected function setServerName($serverName)
	{
		$this->serverName = (string) $serverName;
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
	protected function setStatusMessage($statusMessage)
	{
		$this->statusMessage = (string) $statusMessage;
	}
	
	/**
	 * Get status details
	 * 
	 * @return string
	 */
	public function getStatusDetails()
	{
		return ($this->statusDetails);
	}
	
	/**
	 * Set status details
	 * 
	 * @param string $statusDetails
	 */
	protected function setStatusDetails($statusDetails)
	{
		$this->statusDetails = (string) $statusDetails;
	}
	
	/**
	 * Get status details message
	 * 
	 * @return string
	 */
	public function getStatusDetailsMessage()
	{
		return ($this->statusDetailsMessage);
	}
	
	/**
	 * Set status details message
	 * 
	 * @param string $statusDetailsMessage
	 */
	protected function setStatusDetailsMessage($statusDetailsMessage)
	{
		$this->statusDetailsMessage = (string) $statusDetailsMessage;
	}
	
	/**
	 * Get grade
	 * 
	 * @return string
	 */
	public function getGrade()
	{
		return ($this->grade);
	}
	
	/**
	 * Set grade
	 * 
	 * @param string $grade
	 */
	protected function setGrade($grade)
	{
		$this->grade = (string) $grade;
	}
	
	/**
	 * Get grade if trust issues are ignored
	 */
	public function getGradeTrustIgnored()
	{
		return ($this->gradeTrustIgnored);
	}
	
	/**
	 * Set grade if trust issues are ignored
	 * 
	 * @param string $gradeTrustIgnored
	 */
	protected function setGradeTrustIgnored($gradeTrustIgnored)
	{
		$this->gradeTrustIgnored = (string) $gradeTrustIgnored;
	}
	
	/**
	 * Get hasWarnings
	 * 
	 * @return boolean
	 */
	public function getHasWarnings()
	{
		return ($this->hasWarnings);
	}
	
	/**
	 * Set hasWarnings
	 * 
	 * @param boolean $hasWarnings
	 */
	protected function setHasWarnings($hasWarnings)
	{
		$this->hasWarnings = (boolean) $hasWarnings;
	}
	
	/**
	 * Get isExceptional
	 * 
	 * @return boolean
	 */
	public function getIsExceptional()
	{
		return ($this->isExceptional);
	}
	
	/**
	 * Set isExceptional
	 * 
	 * @param boolean $isExceptional
	 */
	protected function setIsExceptional($isExceptional)
	{
		$this->isExceptional = (boolean) $isExceptional;
	}
	
	/**
	 * Get progress
	 * 
	 * @return int
	 */
	public function getProgress()
	{
		return ($this->progress);
	}
	
	/**
	 * Set progress
	 * 
	 * @param int $progress
	 */
	protected function setProgress($progress)
	{
		$this->progress = (int) $progress;
	}
	
	/**
	 * Get duration in milliseconds
	 * 
	 * @return int
	 */
	public function getDuration()
	{
		return ($this->duration);
	}
	
	/**
	 * Set duration in milliseconds
	 * 
	 * @param int $duration
	 */
	protected function setDuration($duration)
	{
		$this->duration = (int) $duration;
	}
	
	/**
	 * Get ETA in seconds
	 */
	public function getEta()
	{
		return ($this->eta);
	}
	
	/**
	 * Set ETA in seconds
	 * 
	 * @param int $eta
	 */
	protected function setEta($eta)
	{
		$this->eta = new \DateTime('+' . $eta . ' seconds');
	}
	
	/**
	 * Get delegation
	 * 
	 * @return int
	 */
	public function getDelegation()
	{
		return ($this->delegation);
	}
	
	/**
	 * Set delegation
	 * 
	 * @param int $delegation
	 */
	protected function setDelegation($delegation)
	{
		$this->delegation = (int) $delegation;
	}
	
	/**
	 * Get details
	 * 
	 * @return EndpointDetails
	 */
	public function getDetails()
	{
		return ($this->details);
	}
	
	/**
	 * Set details
	 * 
	 * @param EndpointDetails $details
	 */
	protected function setDetails($details)
	{
            if ($details instanceof EndpointDetails) {
		$this->details = $details;
            } else {
                $this->details = new EndpointDetails($details);
            }
	}
}