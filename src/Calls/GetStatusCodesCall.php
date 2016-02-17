<?php

namespace BjoernrDe\SSLLabsApi\Calls;
use BjoernrDe\SSLLabsApi\Objects\StatusCodes;

/**
 * API Call 'getStatusCodes'
 *
 * @author Björn Roland
 */
class GetStatusCodesCall extends GenericCall
{
	/**
	 * Class constructor
	 */
	public function __construct()
	{
		parent::__construct('getStatusCodes', null);
	}

	/**
	 * Send API call
	 *
	 * @return BjoernrDe\SSLLabsApi\Objects\StatusCodes
	 * @see BjoernrDe\SSLLabsApi\Calls\GenericCall::send()
	 */
	public function send()
	{
		$response = parent::send();

		$statusCodesObject = new StatusCodes();

		return ($statusCodesObject->populateObjectByApiResponse($response));
	}
}