<?php
namespace BjoernrDe\SSLLabsApi\Objects;

class StatusCodes implements ApiObject
{
	private $statusDetails = array();

	/**
	 * Get status details
	 *
	 * @return array
	 */
	public function getStatusDetails()
	{
		return ($this->statusDetails);
	}

	/**
	 * Set status details
	 *
	 * @param array $statusDetails
	 */
	private function setStatusDetails(array $statusDetails)
	{
		$this->statusDetails = $statusDetails;
	}

	/**
	 * Get status detail by status code
	 *
	 * @param $statusCode
	 * @return string|bool status detail on success, false on error (i.e. unknown statuscode)
	 */
	public function getStatusDetail($statusCode)
	{
		$statusDetails = $this->getStatusDetails();

		if (isset($statusDetails[$statusCode]))
		{
			return ($statusDetails[$statusCode]);
		}

		return (false);
	}

	/**
	 * /**
	 * {@inheritDoc}
	 *
	 * @return \BjoernrDe\SSLLabsApi\Objects\StatusCodes
	 * @see \BjoernrDe\SSLLabsApi\Objects\ApiObject::populateObjectByApiResponse()
	 */
	public function populateObjectByApiResponse($jsonString)
	{
		$response = json_decode($jsonString);

		isset($response->statusDetails) ? $this->setStatusDetails((array) $response->statusDetails) : '';

		return ($this);
	}
}