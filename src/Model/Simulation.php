<?php

namespace BjoernrDe\SSLLabsApi\Model;

/**
 * Simulation
 */
class Simulation {
    private $client;
    private $errorCide;
    private $attempts;
    private $protocolId;
    private $suiteId;
    
    public function getClient() {
        return $this->client;
    }

    public function getErrorCide() {
        return $this->errorCide;
    }

    public function getAttempts() {
        return $this->attempts;
    }

    public function getProtocolId() {
        return $this->protocolId;
    }

    public function getSuiteId() {
        return $this->suiteId;
    }

    protected function setClient($client) {
        if ($client instanceof SimClient) {
            $this->client = $client;
        } else {
            $this->client = new SimClient($client);
        }
    }

    protected function setErrorCide($errorCide) {
        $this->errorCide = $errorCide;
    }

    protected function setAttempts($attempts) {
        $this->attempts = $attempts;
    }

    protected function setProtocolId($protocolId) {
        $this->protocolId = $protocolId;
    }

    protected function setSuiteId($suiteId) {
        $this->suiteId = $suiteId;
    }


}
