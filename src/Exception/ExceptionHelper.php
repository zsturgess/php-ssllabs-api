<?php

namespace BjoernrDe\SslLabs\Exception;

use GuzzleHttp\Exception\BadResponseException;

/**
 * ExceptionHelper
 */
class ExceptionHelper {
    public static function transformGuzzleException(BadResponseException $e) {
        $response = $e->getResponse()->getBody();
        $status = $e->getResponse()->getStatusCode();
        
        switch ($status) {
            case 400:
                return self::createExceptionBy400Response($response);
            
            case 429:
                return self::map429ByResponse($response);
            
            case 503:
                $cooldown = new \DateTime('+ ' . mt_rand(15, 35) . ' minutes');
                return new QualysUnavailableException('scheduled maintenance', $cooldown);
            
            case 529:
                $cooldown = new \DateTime('+ ' . mt_rand(25, 45) . ' minutes');
                return new QualysUnavailableException('being overloaded', $cooldown);

            default:
                return $e;
        }
    }
    
    public static function map429ByResponse($response) {
        $response = json_decode($response);
        $error = $response->errors[0]->message;
        
        //The values to these exceptions have to be guesses, as Qualys doesn't
        //tell us the limits when we cause a 429.
        if ($error === 'Too many new assessments too fast. Please slow down.') {
            return new AssessmentCooldownExceededException(new \DateTime('+1 minute'));
        } else {
            return new TooManyAssessmentsException(25);
        }
    }
    
    public static function createExceptionBy400Response($response) {
        $response = json_decode($response);
        $error = $response->errors[0];
        
        if (property_exists($error, 'field')) {
            return new \InvalidArgumentException(
                'Invalid value for API parameter "' . $error->field . '". Qualys said: "' . $error->message . '"'
            );
        } else {
            return new \InvalidArgumentException(
                'Invalid API call attempted. Qualys said: "' . $error->message . '"'
            );
        }
    }
}