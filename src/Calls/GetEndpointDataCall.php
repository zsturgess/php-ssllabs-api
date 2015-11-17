<?php
namespace BjoernrDe\SSLLabsApi\Calls;

use BjoernrDe\SSLLabsApi\Objects\Endpoint;
use BjoernrDe\SSLLabsApi\Exceptions\InvalidScopeException;
use BjoernrDe\SSLLabsApi\Exceptions\MissingApiParameterException;

/**
 * API Call 'getEndpointData'
 * 
 * @author Björn Roland
 */
class GetEndpointDataCall extends GenericCall
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
		else if (!isset($parameters['host']) || empty($parameters['host']))
		{
			throw new MissingApiParameterException('Missing host parameter');
		}
		else if (!isset($parameters['s']) || empty($parameters['s']))
		{
			throw new MissingApiParameterException('Missing endpoint ip address (s) parameter');
		}
		
		parent::__construct('getEndpointData', $parameters);
	}
	
	/**
	 * Send API call
	 * 
	 * @return SSLLabsApi\Objects\Host
	 * @see SSLLabsApi\Calls\GenericCall::send()
	 */
	public function send()
	{
		$response = parent::send();
		$endpointObject = new Endpoint();
		
		return ($endpointObject->populateObjectByApiResponse($response));
	}
}