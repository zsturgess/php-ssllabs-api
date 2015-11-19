<?php

namespace BjoernrDe\SSLLabsApi\Exception;

/**
 * QualysUnavailableException
 */
class QualysUnavailableException extends \RuntimeException {
    public function __construct($reason, \DateTime $retryAt) {
        parent::__construct('Qualys SSL Labs is currently unavailable due to ' . $reason . '. You should wait until ' . $retryAt->format('Y-m-d H:i:s') . ' and try again.');
    }
}
