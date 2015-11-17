<?php
namespace BjoernrDe\SSLLabsApi\Calls;

use BjoernrDe\SSLLabsApi\Objects\Info;

/**
 * API Call 'info'
 * 
 * @author Björn Roland
 */
class InfoCall extends GenericCall
{
	/**
	 * Class constructor
	 */
	public function __construct()
	{
		parent::__construct('info');
	}
	
	/**
	 * Send API call
	 * 
	 * @return SSLLabsApi\Objects\Info
	 * @see SSLLabsApi\Calls\GenericCall::send()
	 */
	public function send()
	{
		$response = parent::send();
		$infoObject = new Info();
		
		return ($infoObject->populateObjectByApiResponse($response));
	}
}