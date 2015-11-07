<?php

namespace BjoernrDe\SslLabs\Exception;

/**
 * TooManyAssessmentsException
 * Thrown when the API client has been requested to run too many assessments at the same time
 */
class TooManyAssessmentsException extends \RuntimeException {
    public function __construct($maxAssessments) {
        parent::__construct('You have been allowed to run up to ' . $maxAssessments . ' concurrent assessments by Qualys SSL Labs and have exceeded this limit. Please try again later.');
    }
}
