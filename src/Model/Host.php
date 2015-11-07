<?php

namespace BjoernrDe\SslLabs\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Host
 */
class Host {
    private $host;
    private $port;
    private $protocol;
    private $public;
    private $status;
    private $statusMessage;
    private $startTime;
    private $testTime;
    private $engineVersion;
    private $criteriaVersion;
    private $cacheExpiryTime;
    private $endpoints;
    private $certHostnames;
    
    
    /**
     * Constructor
     * Passed the json response from the API that
     * should be used to contruct the object
     */
    public function __construct($response) {
        if (!is_object($response)) {
            $response = json_decode($response);
        }
        
        $this->host = $response->host;
        $this->port = (int) $response->port;
        $this->protocol = $response->protocol;
        $this->public = (bool) $response->isPublic;
        $this->status = $response->status;
        $this->statusMessage = $response->statusMessage;
        $this->startTime = new \DateTime($response->startTime / 1000);
        $this->testTime = new \DateTime($response->testTime / 1000);
        $this->engineVersion = $response->engineVersion;
        $this->criteriaVersion = $response->criteriaVersion;
        $this->cacheExpiryTime = new \DateTime($response->cacheExpiryTime);
        
        if (property_exists($response, 'certHostnames')) {
            $this->certHostnames = new ArrayCollection($response->certHostnames);
        } else {
            $this->certHostnames = new ArrayCollection([$this->host]);
        }
        
        $this->endpoints = new ArrayCollection();
        foreach ($response->endpoints as $endpoint) {
            $this->endpoints->add(new Endpoint($endpoint));
        }
    }
    

    public function getHost() {
        return $this->host;
    }

    public function getPort() {
        return $this->port;
    }

    public function getProtocol() {
        return $this->protocol;
    }

    public function isPublic() {
        return $this->public;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getStatusMessage() {
        return $this->statusMessage;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function getTestTime() {
        return $this->testTime;
    }
    
    /**
     * getTestTime() sounds like a duration.
     * This is my attempt to fix that.
     */
    public function getEndTime() {
        return $this->getTestTime();
    }

    public function getEngineVersion() {
        return $this->engineVersion;
    }

    public function getCriteriaVersion() {
        return $this->criteriaVersion;
    }

    public function getCacheExpiryTime() {
        return $this->cacheExpiryTime;
    }

    public function getEndpoints() {
        return $this->endpoints;
    }

    public function getCertHostnames() {
        return $this->certHostnames;
    }
}
