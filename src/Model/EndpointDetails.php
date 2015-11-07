<?php

namespace BjoernrDe\SslLabs\Model;

/**
 * EndpointDetails
 */
class EndpointDetails {
    private $hostStartTime;
    private $key;
    private $cert;
    private $chain;
    private $protocols;
    private $suites;
    private $serverSignature;
    private $prefixDelegation;
    private $nonPrefixDelegation;
    private $renegSupport;
    private $stsStatus;
    private $stsResponseHeader;
    private $stsMaxAge;
    private $stsSubdomains;
    private $stsPreload;
    private $pkpResponseHeader;
    private $sessionResumption;
    private $compressionMethods;
    private $supportsNpn;
    private $npnProtocols;
    private $sessionTickets;
    private $ocspStapling;
    private $staplingRevocationStatus;
    private $staplingRevocationErrorMessage;
    private $sniRequired;
    private $httpStatusCode;
    private $httpForwarding;
    private $forwardSecrecy;
    private $supportsRc4;
    private $rc4WithModern;
    private $rc4Only;
    private $sims;
    private $heartbeat;
    private $fallbackScsv;
    private $hasSct;
    private $dhPrimes;
    private $dhUsesKnownPrimes;
    private $dhYsReuse;
    private $chaCha20Preference;
    private $vulnerabilities;
    
    public function __construct($response) {
        if (!is_object($response)) {
            $response = json_decode($response);
        }
        
        $this->vulnerabilities = new EndpointVulnerabilities($response);
        $this->hostStartTime = new \DateTime($response->hostStartTime / 1000);
        $this->prefixDelegation = (bool) $response->prefixDelegation;
        $this->nonPrefixDelegation = (bool) $response->nonPrefixDelegation;
        $this->renegSupport = $response->renegSupport; //@todo: Object
        $this->stsStatus = $response->stsStatus; //@todo: Group together into an HSTS object
        $this->stsResponseHeader = $response->stsResponseHeader;
        $this->stsMaxAge = $response->stsMaxAge;
        $this->stsSubdomains = $response->stsSubdomains;
        $this->stsPreload = $response->stsPreload;
        $this->pkpResponseHeader = $response->pkpResponseHeader;
        $this->sessionResumption = $response->sessionResumption; //@todo: Object
        $this->compressionMethods = $response->compressionMethods; //@todo: Object
        $this->supportsNpn = (bool) $response->supportsNpn; //@todo: Group together into Npn object
        $this->npnProtocols = $response->npnProtocols;
        $this->sessionTickets = $response->sessionTickets; //@todo: Object
        $this->ocspStapling = $response->ocspStapling; //@todo: Group into OCSP object
        $this->staplingRevocationStatus = $response->staplingRevocationStatus;
        $this->staplingRevocationErrorMessage = $response->staplingRevocationErrorMessage;
        $this->sniRequired = (bool) $response->sniRequired;
        $this->forwardSecrecy = $response->forwardSecrecy; //@todo: Object
        $this->supportsRc4 = $response->supportsRc4; //@todo: Group into RC4Support object
        $this->rc4WithModern = $response->rc4WithModern;
        $this->rc4Only = $response->rc4Only;
        $this->heartbeat = (bool) $response->heartbeat;
        $this->hasSct = $response->hasSct; //@todo: Object
        $this->chaCha20Preference = (bool) $response->chaCha20Preference;
        
        $this->key = $response->key; //@todo: create obj
        $this->cert = $response->cert; //@todo: create obj
        $this->chain = $response->chain; //@todo: create obj
        $this->protocols = $response->protocols; //@todo: create obj/collection
        $this->suites = $response->suites; //@todo: create obj
        $this->sims = $response->sims; //@todo: create obj
        foreach (['serverSignature', 'httpStatusCode', 'httpForwarding', 'fallbackScsv'] as $property) {
            if (property_exists($repsonse, $property)) {
                $this->{$property} = $response->{$property};
            } else {
                $this->{$property} = NULL;
            }
        }
        
        //May not be present, requires grouping into dh object
        $this->dhPrimes = $response->dhPrimes; //array
        $this->dhUsesKnownPrimes = $response->dhUsesKnownPrimes;
        $this->dhYsReuse = $response->dhYsReuse;
    }

    
    public function getHostStartTime() {
        return $this->hostStartTime;
    }

    public function getKey() {
        return $this->key;
    }

    public function getCert() {
        return $this->cert;
    }

    public function getChain() {
        return $this->chain;
    }

    public function getProtocols() {
        return $this->protocols;
    }

    public function getSuites() {
        return $this->suites;
    }

    public function getServerSignature() {
        return $this->serverSignature;
    }

    public function hasPrefixDelegation() {
        return $this->prefixDelegation;
    }

    public function hasNonPrefixDelegation() {
        return $this->nonPrefixDelegation;
    }

    public function getRenegSupport() {
        return $this->renegSupport;
    }

    public function getStsStatus() {
        return $this->stsStatus;
    }

    public function getStsResponseHeader() {
        return $this->stsResponseHeader;
    }

    public function getStsMaxAge() {
        return $this->stsMaxAge;
    }

    public function hasStsSubdomains() {
        return $this->stsSubdomains;
    }

    public function hasStsPreload() {
        return $this->stsPreload;
    }

    public function getPkpResponseHeader() {
        return $this->pkpResponseHeader;
    }

    public function getSessionResumption() {
        return $this->sessionResumption;
    }

    public function getCompressionMethods() {
        return $this->compressionMethods;
    }

    public function hasNpnSupport() {
        return $this->supportsNpn;
    }

    public function getNpnProtocols() {
        return $this->npnProtocols;
    }

    public function getSessionTickets() {
        return $this->sessionTickets;
    }

    public function hasOcspStapling() {
        return $this->ocspStapling;
    }

    public function getStaplingRevocationStatus() {
        return $this->staplingRevocationStatus;
    }

    public function getStaplingRevocationErrorMessage() {
        return $this->staplingRevocationErrorMessage;
    }

    public function isSniRequired() {
        return $this->sniRequired;
    }

    public function getHttpStatusCode() {
        return $this->httpStatusCode;
    }

    public function getHttpForwarding() {
        return $this->httpForwarding;
    }

    public function getForwardSecrecy() {
        return $this->forwardSecrecy;
    }

    public function isRc4Supported() {
        return $this->supportsRc4;
    }

    public function isRc4SupportedWithModern() {
        return $this->rc4WithModern;
    }

    public function isRc4Only() {
        return $this->rc4Only;
    }

    public function getSims() {
        return $this->sims;
    }

    public function isHeartbeatSupported() {
        return $this->heartbeat;
    }

    public function isFallbackScsvSupported() {
        return $this->fallbackScsv;
    }

    public function getHasSct() {
        return $this->hasSct;
    }

    public function getDhPrimes() {
        return $this->dhPrimes;
    }

    public function getDhUsesKnownPrimes() {
        return $this->dhUsesKnownPrimes;
    }

    public function getDhYsReuse() {
        return $this->dhYsReuse;
    }

    public function hasChaCha20Preference() {
        return $this->chaCha20Preference;
    }
    
    public function getVulnerabilities() {
        return $this->vulnerabilities;
    }
    
    public function isVulnerable() {
        return ($this->getVulnerabilities()->count() > 0);
    }
}
