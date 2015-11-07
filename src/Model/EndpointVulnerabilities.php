<?php

namespace BjoernrDe\SslLabs\Model;

/**
 * EndpointVunerabilities
 */
class EndpointVulnerabilities {
    const VULNERABLE = -1;
    const UNKNOWN = 0;
    const SAFE = 1;
    
    private $beast;
    private $heartbleed;
    private $openSslCcs;
    private $poodle;
    private $freak;
    private $logjam;
    
    public function __construct($response) {
        if (!is_object($response)) {
            $response = json_decode($response);
        }
        
        $this->beast = $this->convertBooleanToStatus($response->vulnBeast);
        $this->heartbleed = $this->convertBooleanToStatus($response->heartbleed);
        $this->freak = $this->convertBooleanToStatus($response->freak);
        $this->logjam = $this->convertBooleanToStatus($response->logjam);
        
        switch ($response->openSslCcs) {
            case 1:
                $this->openSslCcs = self::SAFE;
                break;

            case 3:
                $this->openSslCcs = self::VULNERABLE;
                break;
            
            default:
                $this->openSslCcs = self::UNKNOWN;
                break;
        }
        
        switch ($response->poodleTls) {
            case 1:
                $this->poodle = self::SAFE;
                break;

            case 2:
                $this->poodle = self::VULNERABLE;
                break;
            
            default:
                $this->poodle = self::UNKNOWN;
                break;
        }
        
    }
    
    public static function getTestedList() {
        return [
            'Beast',
            'Heartbleed',
            'OpenSslCcs',
            'Poodle',
            'Freak',
            'Logjam'
        ];
    }

    public function getAll() {
        $vulns = [];
        
        foreach (self::getTestedList() as $vuln) {
            if ($this->{'isVulnerableTo' . $vuln}()) {
                $vulns[] = $vuln;
            }
        }
        
        return $vulns;
    }
    
    public function count() {
        return count($this->getAll());
    }
    
    public function getBeast() {
        return $this->beast;
    }
    
    public function isVulnerableToBeast() {
        return ($this->beast === self::VULNERABLE);
    }
    
    public function getHeartbleed() {
        return $this->heartbleed;
    }
    
    public function isVulnerableToHeartbleed() {
        return ($this->heartbleed === self::VULNERABLE);
    }
    
    public function getOpenSslCcs() {
        return $this->openSslCcs;
    }
    
    public function isVulnerableToOpenSslCcs() {
        return ($this->openSslCcs === self::VULNERABLE);
    }
    
    public function getPoodle() {
        return $this->poodle;
    }
    
    public function isVulnerableToPoodle() {
        return ($this->poodle === self::VULNERABLE);
    }
    
    public function getFreak() {
        return $this->freak;
    }
    
    public function isVulnerableToFreak() {
        return ($this->freak === self::VULNERABLE);
    }
    
    public function getLogjam() {
        return $this->logjam;
    }
    
    public function isVulnerableToLogjam() {
        return ($this->logjam === self::VULNERABLE);
    }
    
    private function convertBooleanToStatus($boolean) {
        if ($boolean) {
            return self::VULNERABLE;
        } else {
            return self::SAFE;
        }
    }
}