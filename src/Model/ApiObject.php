<?php

namespace BjoernrDe\SSLLabsApi\Model;

/**
 * ApiObject interface.
 * 
 * @author Björn Roland
 */
class ApiObject
{
    /**
     * Populate object by API response.
     * 
     * @param object $response
     */
    public function populateObjectByApiResponse($response)
    {
        foreach ($response as $key => $value) {
            $setterMethod = 'set'.ucfirst($key);

            if (!method_exists($this, $setterMethod)) {
                trigger_error('Got a property '.$key.' from Qualys that is not supported by this version of php-ssllabs-api.');
            } else {
                $this->{$setterMethod}($value);
            }
        }
    }

    public function __construct($apiResponse)
    {
        if (is_object($apiResponse)) {
            $this->populateObjectByApiResponse($apiResponse);
        } else {
            $this->populateObjectByApiResponse(json_decode($apiResponse));
        }
    }
}
