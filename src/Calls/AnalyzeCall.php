<?php
namespace BjoernrDe\SSLLabsApi\Calls;

use BjoernrDe\SSLLabsApi\Objects\Host;
use BjoernrDe\SSLLabsApi\Exceptions\InvalidScopeException;
use BjoernrDe\SSLLabsApi\Exceptions\MissingApiParameterException;

/**
 * API Call 'analyze'
 * 
 * @author Björn Roland
 */
class AnalyzeCall extends GenericCall
{
	/**
	 * Class constructor
	 * 
	 * @param array $parameters
	 */
	public function __construct($parameters = array())
	{
		if (!is_array($parameters))
		{
			throw new InvalidScopeException('Parameters must be an array');
		}
		if (!isset($parameters['host']) || empty($parameters['host']))
		{
			throw new MissingApiParameterException('Missing host parameter');
		}
		
		parent::__construct('analyze', $parameters);
	}
	
	/**
	 * Send API call
	 * 
	 * @return BjoernrDe\SSLLabsApi\Objects\Host
	 * @see BjoernrDe\SSLLabsApi\Calls\GenericCall::send()
	 */
	public function send()
	{
		$response = parent::send();
		$hostObject = new Host();
		
		return ($hostObject->populateObjectByApiResponse($response));
	}
}