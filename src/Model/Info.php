<?php
namespace BjoernrDe\SSLLabsApi\Model;

/**
 * SSLLabs Info object
 * 
 * @author Björn Roland
 * @see https://github.com/ssllabs/ssllabs-scan/blob/master/ssllabs-api-docs.md#info
 */

class Info extends ApiObject
{
	/**
	 * API engine version 
	 * @var string
	 */
	private $engineVersion;
	
	/**
	 * API criteria version
	 * @var string $criteriaVersion
	 */
	private $criteriaVersion;
	
	/**
	 * Client max assessments
	 * @var int
	 */
	private $clientMaxAssessments;
	
	/**
	 * Max assessments
	 * @var int
	 */
	private $maxAssessments;
	
	/**
	 * Current assessments
	 * @var int
	 */
	private $currentAssessments;
	
	/**
	 * New assessments cool off time in milliseconds
	 * @var int
	 */
	private $newAssessmentCoolOff;
	
	/**
	 * API messages
	 * @var array
	 */
	private $messages;
	
	/**
	 * Get current API engine version
	 * 
	 * @return string
	 */
	public function getEngineVersion()
	{
		return ($this->engineVersion);
	}
	
	/** 
	 * Set API engine version
	 * 
	 * @param string $version
	 */
	protected function setEngineVersion($version)
	{
		$this->engineVersion = (string) $version;
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
	protected function setCriteriaVersion($criteriaVersion)
	{
		$this->criteriaVersion = (string) $criteriaVersion;
	}
	
	/**
	 * Get client max assessments
	 * 
         * @deprecated
	 * @return int
	 */
	public function getClientMaxAssessments()
	{
		return ($this->clientMaxAssessments);
	}
	
	/**
	 * Set client max assessments
	 * 
	 * @param int $clientMaxAssessments
	 */
	protected function setClientMaxAssessments($clientMaxAssessments)
	{
		$this->clientMaxAssessments = (int) $clientMaxAssessments;
	}
	
	/**
	 * Get max assessments
	 * 
	 * @return int
	 */
	public function getMaxAssessments()
	{
		return ($this->maxAssessments);
	}
	
	/**
	 * Set max assessments
	 * 
	 * @param int $maxAssessments
	 */
	protected function setMaxAssessments($maxAssessments)
	{
		$this->maxAssessments = (int) $maxAssessments;
	}
	
	/**
	 * Get current assessments
	 * 
	 * @return int
	 */
	public function getCurrentAssessments()
	{
		return ($this->currentAssessments);
	}
	
	/**
	 * Set current assessments
	 * 
	 * @param int $currentAssessments
	 */	
	protected function setCurrentAssessments($currentAssessments)
	{
		$this->currentAssessments = (int) $currentAssessments;
	}
	
	/**
	 * Get new assessments cool off time in milliseconds
	 * 
	 * @return int
	 */
	public function getNewAssessmentCoolOff()
	{
		return ($this->newAssessmentCoolOff);
	}
	
	/**
	 * Set new assessments cool off time in milliseconds
	 * 
	 * @param int $newAssessmentCoolOff
	 */
	protected function setNewAssessmentCoolOff($newAssessmentCoolOff)
	{
		$this->newAssessmentCoolOff = (int) $newAssessmentCoolOff;
	}
	
	/**
	 * Get messages
	 * 
	 * @return array
	 */
	public function getMessages()
	{
		return ($this->messages);
	}
	
	/**
	 * Set messages
	 * 
	 * @param array $messages
	 */
	protected function setMessages($messages)
	{
		$this->messages = (array) $messages;
	}
}