<?php
namespace BjoernrDe\SSLLabsApi\Calls;

/**
 * API Call 'getRootCertsRaw'
 *
 * @author Björn Roland
 */

class GetRootCertsRaw extends GenericCall
{
	/**
	 * Class constructor
	 */
	public function __construct()
	{
		parent::__construct('getRootCertsRaw', null);
	}

	/**
	 * Send API call
	 *
	 * @return string
	 * @see BjoernrDe\SSLLabsApi\Calls\GenericCall::send()
	 */
	public function send()
	{
		$response = parent::send();

		//getRootCertsRaw API call does not respond with an object
		//Just raw output of root certificates

		return ($response);
	}
}