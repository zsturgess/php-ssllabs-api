<?php

namespace BjoernrDe\SSLLabsApi\Model;

/**
 * Simulation
 */
class Simulation extends ApiObject {
    private $client;
    private $errorCode;
    private $attempts;
    private $protocolId;
    private $suiteId;
    
    public function getClient() {
        return $this->client;
    }

    public function getErrorCode() {
        return $this->errorCode;
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

    protected function setErrorCode($errorCode) {
        $this->errorCode = $errorCode;
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
