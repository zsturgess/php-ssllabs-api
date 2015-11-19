<?php
namespace BjoernrDe\SSLLabsApi\Model;

/**
 * ApiObject interface
 * 
 * @author Björn Roland
 */
abstract class ApiObject
{
	/**
	 * Populate object by API response
	 * 
	 * @param object $response
	 */
	abstract public function populateObjectByApiResponse($response);
        
        public function __construct($apiResponse) {
            if (is_object($apiResponse)) {
                $this->populateObjectByApiResponse($apiResponse);
            } else {
                $this->populateObjectByApiResponse(json_decode($apiResponse));
            }
        }
}