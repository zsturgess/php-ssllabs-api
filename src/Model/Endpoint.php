<?php

namespace BjoernrDe\SslLabs\Model;

/**
 * Endpoint
 */
class Endpoint {
    private $ipAddress;
    private $serverName;
    private $statusMessage;
    private $statusDetails;
    private $statusDetailsMessage;
    private $grade;
    private $gradeTrustIgnored;
    private $hasWarnings;
    private $isExceptional;
    private $progress;
    private $duration;
    private $eta;
    private $delegation;
    private $details = NULL;
    
    
    public function __construct($response) {
        if (!is_object($response)) {
            $response = json_decode($response);
        }
        
        $this->ipAddress = $response->ipAddress;
        $this->serverName = $response->serverName;
        $this->statusMessage = $response->statusMessage;
        $this->statusDetails = $response->statusDetails;
        $this->statusDetailsMessage = $response->statusDetailsMessage;
        $this->grade = new Grade($response->grade);
        $this->gradeTrustIgnored = new Grade($response->gradeTrustIgnored);
        $this->hasWarnings = (bool) $response->hasWarnings;
        $this->isExceptional = (bool) $response->isExceptional;
        $this->progress = (int) $response->progress;
        $this->duration = (int) floor($response->duration / 1000);
        $this->eta = new \DateTime('+ ' . $response->eta . ' seconds');
        $this->delegation = $response->delegation;
        
        if (property_exists($response, 'details')) {
            $this->details = new EndpointDetails($response->details);
        }
    }
    
    
    public function getIpAddress() {
        return $this->ipAddress;
    }

    public function getServerName() {
        return $this->serverName;
    }

    public function getStatusMessage() {
        return $this->statusMessage;
    }

    public function getStatusDetails() {
        return $this->statusDetails;
    }

    public function getStatusDetailsMessage() {
        return $this->statusDetailsMessage;
    }

    public function getGrade() {
        return $this->grade;
    }

    public function getGradeTrustIgnored() {
        return $this->gradeTrustIgnored;
    }

    public function hasWarnings() {
        return $this->hasWarnings;
    }

    public function isExceptional() {
        return $this->isExceptional;
    }

    public function getProgress() {
        return $this->progress;
    }

    public function getDuration() {
        return $this->duration;
    }

    public function getEta() {
        return $this->eta;
    }

    public function getDelegation() {
        return $this->delegation;
    }

    public function hasDetails() {
        return ($this->details !== NULL);
    }
    
    public function getDetails() {
        return $this->details;
    }
}
