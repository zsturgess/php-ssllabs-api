<?php

namespace BjoernrDe\SSLLabsApi\Exception;

/**
 * AssessmentCooldownExceededException
 * Thrown when the API Client has been requested to submit a new assessment too soon after the previous one
 */
class AssessmentCooldownExceededException extends \RuntimeException {
    public function __construct(\DateTime $nextAssessment) {
        parent::__construct('You have attempted to start a new assessment too soon after starting the previous one. You should wait until ' . $nextAssessment->format('Y-m-d H:i:s') . ' and try again.');
    }
}
