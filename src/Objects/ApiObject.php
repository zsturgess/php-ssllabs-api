<?php
namespace BjoernrDe\SSLLabsApi\Objects;

/**
 * ApiObject interface
 * 
 * @author Björn Roland
 */
interface ApiObject
{
	/**
	 * Populate object by API response
	 * 
	 * @param string $jsonString
	 */
	public function populateObjectByApiResponse($jsonString);
}