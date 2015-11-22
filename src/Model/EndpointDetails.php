<?php
namespace BjoernrDe\SSLLabsApi\Model;

class EndpointDetails extends ApiObject
{
	private $hostStartTime;
	private $key;
	private $cert;
	private $chain;
	private $protocols = array();
	private $suites;
	private $serverSignature;
	private $prefixDelegation;
	private $nonPrefixDelegation;
	private $vulnBeast;
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
	private $supportsRc4;
	private $rc4WithModern;
	private $rc4Only;
	private $forwardSecrecy;
	private $sims;
	private $heartbleed;
	private $heartbeat;
	private $openSslCcs;
	private $poodle;
	private $poodleTls;
	private $fallbackScsv;
	private $freak;
	private $hasSct;
	private $dhPrimes = array();
	private $dhUsesKnownPrimes;
	private $dhYsReuse;
	private $logjam;
	private $chaCha20Preference;
        private $hstsPolicy;
        private $hstsPreloads;
        private $hpkpPolicy;
        private $hpkpRoPolicy;
	
	public function getHostStartTime()
	{
		return ($this->hostStartTime);
	}
	
	protected function setHostStartTime($hostStartTime)
	{
		$this->hostStartTime = $hostStartTime;
	}
	
	public function getKey()
	{
		return ($this->key);
	}
	
	protected function setKey($key)
	{
            if ($key instanceof Key) {
		$this->key = $key;
            } else {
                $this->key = new Key($key);
            }
	}
	
	public function getCert()
	{
		return ($this->cert);
	}
	
	protected function setCert($cert)
	{
		$this->cert = $cert;
	}
	
	public function getChain()
	{
		return ($this->chain);
	}
	
	protected function setChain($chain)
	{
		$this->chain = $chain;
		return $this;
	}
	
	public function getProtocols()
	{
		return ($this->protocols);
	}
	
	protected function setProtocols($protocols)
	{
		$this->protocols = $protocols;
	}
	
	public function getSuites()
	{
		return ($this->suites);
	}
	
	protected function setSuites($suites)
	{
		$this->suites = $suites;
	}
	
	public function getServerSignature()
	{
		return ($this->serverSignature);
	}
	
	protected function setServerSignature($serverSignature)
	{
		$this->serverSignature = $serverSignature;
	}
	
	public function getPrefixDelegation()
	{
		return ($this->prefixDelegation);
	}
	
	protected function setPrefixDelegation($prefixDelegation)
	{
		$this->prefixDelegation = $prefixDelegation;
	}
	
	public function getNonPrefixDelegation()
	{
		return ($this->nonPrefixDelegation);
	}
	
	protected function setNonPrefixDelegation($nonPrefixDelegation)
	{
		$this->nonPrefixDelegation = $nonPrefixDelegation;
	}
	
	public function getVulnBeast()
	{
		return ($this->vulnBeast);
	}
	
	protected function setVulnBeast($vulnBeast)
	{
		$this->vulnBeast = $vulnBeast;
	}
	
	public function getRenegSupport()
	{
		return ($this->renegSupport);
	}
	
	protected function setRenegSupport($renegSupport)
	{
		$this->renegSupport = $renegSupport;
	}
	
	public function getStsStatus()
	{
		return ($this->stsStatus);
	}
	
	protected function setStsStatus($stsStatus)
	{
		$this->stsStatus = $stsStatus;
	}
	
	public function getStsResponseHeader()
	{
		return ($this->stsResponseHeader);
	}
	
	protected function setStsResponseHeader($stsReponseHeader)
	{
		$this->stsResponseHeader = $stsReponseHeader;
	}
	
	public function getStsMaxAge()
	{
		return ($this->stsMaxAge);
	}
	
	protected function setStsMaxAge($stsMaxAge)
	{
		$this->stsMaxAge = $stsMaxAge;
	}
	
	public function getStsSubdomains()
	{
		return ($this->stsSubdomains);
	}
	
	protected function setStsSubdomains($stsSubdomains)
	{
		$this->stsSubdomains = $stsSubdomains;
	}
	
	public function getStsPreload()
	{
		return ($this->stsPreload);
	}
	
	protected function setStsPreload($stsPreload)
	{
		$this->stsPreload = $stsPreload;
	}
	
	public function getPkpResponseHeader()
	{
		return ($this->pkpResponseHeader);
	}
	
	protected function setPkpResponseHeader($pkpResponseHeader)
	{
		$this->pkpResponseHeader = $pkpResponseHeader;
	}
	
	public function getSessionResumption()
	{
		return ($this->sessionResumption);
	}
	
	protected function setSessionResumption($sessionResumption)
	{
		$this->sessionResumption = $sessionResumption;
	}
	
	public function getCompressionMethods()
	{
		return ($this->compressionMethods);
	}
	
	protected function setCompressionMethods($compressionMethods)
	{
		$this->compressionMethods = $compressionMethods;
	}
	
	public function getSupportsNpn()
	{
		return ($this->supportsNpn);
	}
	
	protected function setSupportsNpn($suportsNpn)
	{
		$this->supportsNpn = $suportsNpn;
	}
	
	public function getNpnProtocols()
	{
		return ($this->npnProtocols);
	}
	
	protected function setNpnProtocols($npnProtocols)
	{
		$this->npnProtocols = $npnProtocols;
	}
	
	public function getSessionTickets()
	{
		return ($this->sessionTickets);
	}
	
	protected function setSessionTickets($sessionTickets)
	{
		$this->sessionTickets = $sessionTickets;
	}
	
	public function getOcspStapling()
	{
		return ($this->ocspStapling);
	}
	
	protected function setOcspStapling($ocspStapling)
	{
		$this->ocspStapling = $ocspStapling;
	}
	
	public function getStaplingRevocationStatus()
	{
		return ($this->staplingRevocationStatus);
	}
	
	protected function setStaplingRevocationStatus($staplingRevocationStatus)
	{
		$this->staplingRevocationStatus = $staplingRevocationStatus;
	}
	
	public function getStaplingRevocationErrorMessage()
	{
		return ($this->staplingRevocationErrorMessage);
	}
	
	protected function setStaplingRevocationErrorMessage($staplingRevocationErrorMessage)
	{
		$this->staplingRevocationErrorMessage = $staplingRevocationErrorMessage;
	}
	
	public function getSniRequired()
	{
		return ($this->sniRequired);
	}
	
	protected function setSniRequired($sniRequired)
	{
		$this->sniRequired = $sniRequired;
	}
	
	public function getHttpStatusCode()
	{
		return ($this->httpStatusCode);
	}
	
	protected function setHttpStatusCode($httpStatusCode)
	{
		$this->httpStatusCode = $httpStatusCode;
	}
	
	public function getHttpForwarding()
	{
		return ($this->httpForwarding);
	}
	
	protected function setHttpForwarding($httpForwarding)
	{
		$this->httpForwarding = $httpForwarding;
	}
	
	public function getSupportsRc4()
	{
		return ($this->supportsRc4);
	}
	
	protected function setSupportsRc4($supportsRc4)
	{
		$this->supportsRc4 = $supportsRc4;
		return $this;
	}
	
	public function getRc4WithModern()
	{
		return ($this->rc4WithModern);
	}
	
	protected function setRc4WithModern($rc4WithModern)
	{
		$this->rc4WithModern = $rc4WithModern;
	}
	
	public function getRc4Only()
	{
		return ($this->rc4Only);
	}
	
	protected function setRc4Only($rc4Only)
	{
		$this->rc4Only = $rc4Only;
	}
	
	public function getForwardSecrecy()
	{
		return ($this->forwardSecrecy);
	}
	
	protected function setForwardSecrecy($forwardSecrecy)
	{
		$this->forwardSecrecy = $forwardSecrecy;
	}
	
	public function getSims()
	{
		return ($this->sims);
	}
	
	protected function setSims($sims)
	{
		$this->sims = $sims;
	}
	
	public function getHeartbleed()
	{
		return ($this->heartbleed);
	}
	
	protected function setHeartbleed($heartbleed)
	{
		$this->heartbleed = $heartbleed;
	}
	
	public function getHeartbeat()
	{
		return ($this->heartbeat);
	}
	
	protected function setHeartbeat($heartbeat)
	{
		$this->heartbeat = $heartbeat;
	}
	
	public function getOpenSslCcs()
	{
		return ($this->openSslCcs);
	}
	
	protected function setOpenSslCcs($openSslCcs)
	{
		$this->openSslCcs = $openSslCcs;
	}
	
	public function getPoodle()
	{
		return ($this->poodle);
	}
	
	protected function setPoodle($poodle)
	{
		$this->poodle = $poodle;
	}
	
	public function getPoodleTls()
	{
		return ($this->poodleTls);
	}
	
	protected function setPoodleTls($poodleTls)
	{
		$this->poodleTls = $poodleTls;
	}
	
	public function getFallbackScsv()
	{
		return ($this->fallbackScsv);
	}
	
	protected function setFallbackScsv($fallbackScsv)
	{
		$this->fallbackScsv = $fallbackScsv;
	}
	
	public function getFreak()
	{
		return ($this->freak);
	}
	
	protected function setFreak($freak)
	{
		$this->freak = $freak;
	}
	
	public function getHasSct()
	{
		return ($this->hasSct);
	}
	
	protected function setHasSct($hasSct)
	{
		$this->hasSct = $hasSct;
	}
	
	public function getDhPrimes()
	{
		return ($this->dhPrimes);
	}
	
	protected function setDhPrimes($dhPrimes)
	{
		$this->dhPrimes = $dhPrimes;
	}
	
	public function getDhUsesKnownPrimes()
	{
		return ($this->dhUsesKnownPrimes);
	}
	
	protected function setDhUsesKnownPrimes($dhUsesKnownPrimes)
	{
		$this->dhUsesKnownPrimes = $dhUsesKnownPrimes;
	}
	
	public function getDhYsReuse()
	{
		return ($this->dhYsReuse);
	}
	
	protected function setDhYsReuse($dhYsReuse)
	{
		$this->dhYsReuse = $dhYsReuse;
	}
	
	public function getLogjam()
	{
		return ($this->logjam);
	}
	
	protected function setLogjam($logjam)
	{
		$this->logjam = $logjam;
	}
	
	public function getChaCha20Preference()
	{
		return ($this->chaCha20Preference);
	}
	
	protected function setChaCha20Preference($chaCha20Preference)
	{
		$this->chaCha20Preference = $chaCha20Preference;
	}
        
        public function getHstsPolicy() {
                return $this->hstsPolicy;
        }

        protected function setHstsPolicy($hstsPolicy) {
                $this->hstsPolicy = $hstsPolicy;
        }
        
        public function getHstsPreloads() {
                return $this->hstsPreloads;
        }

        protected function setHstsPreloads($hstsPreloads) {
                $this->hstsPreloads = $hstsPreloads;
        }
        
        public function getHpkpPolicy() {
            return $this->hpkpPolicy;
        }

        protected function setHpkpPolicy($hpkpPolicy) {
            $this->hpkpPolicy = $hpkpPolicy;
        }

        public function getHpkpRoPolicy() {
            return $this->hpkpRoPolicy;
        }

        protected function setHpkpRoPolicy($hpkpRoPolicy) {
            $this->hpkpRoPolicy = $hpkpRoPolicy;
        }
}
