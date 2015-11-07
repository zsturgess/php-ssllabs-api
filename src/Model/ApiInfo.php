<?php

namespace BjoernrDe\SslLabs\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * ApiInfo
 */
class ApiInfo {
    private $version;
    private $criteriaVersion;
    private $maxAssessments;
    private $currentAssessments;
    private $newAssessmentCoolOff;
    private $messages;
    
    /**
     * Constructor
     * Passed the json response from the API that
     * should be used to contruct the object
     */
    public function __construct($response) {
        if (!is_object($response)) {
            $response = json_decode($response);
        }
        
        $this->version = $response->version;
        $this->criteriaVersion = $response->criteriaVersion;
        $this->maxAssessments = (int) $response->maxAssessments;
        $this->currentAssessments = (int) $response->currentAssessments;
        $this->newAssessmentCoolOff = (int) $response->newAssessmentCoolOff / 1000;
        $this->messages = new ArrayCollection();
        
        foreach ($response->messages as $message) {
            $this->messages->add(new Message($message));
        }
    }

    
    public function getVersion() {
        return $this->version;
    }

    public function getCriteriaVersion() {
        return $this->criteriaVersion;
    }

    public function getMaxAssessments() {
        return $this->maxAssessments;
    }

    public function getCurrentAssessments() {
        return $this->currentAssessments;
    }

    public function getNewAssessmentCoolOff() {
        return $this->newAssessmentCoolOff;
    }

    public function getMessages() {
        return $this->messages;
    }
}
