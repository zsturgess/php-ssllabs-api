<?php
namespace BjoernrDe\SSLLabsApi\Objects;

class EndpointDetails implements ApiObject
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
	private $stsReponseHeader;
	private $stsMaxAge;
	private $stsSubdomains;
	private $stsPreload;
	private $pkpResponseHeader;
	private $sessionResumption;
	private $compressionMethods;
	private $suportsNpn;
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
	
	public function getHostStartTime()
	{
		return ($this->hostStartTime);
	}
	
	private function setHostStartTime($hostStartTime)
	{
		$this->hostStartTime = $hostStartTime;
	}
	
	public function getKey()
	{
		return ($this->key);
	}
	
	private function setKey(Key $key)
	{
		$this->key = $key;
	}
	
	public function getCert()
	{
		return ($this->cert);
	}
	
	private function setCert($cert)
	{
		$this->cert = $cert;
	}
	
	public function getChain()
	{
		return ($this->chain);
	}
	
	private function setChain($chain)
	{
		$this->chain = $chain;
		return $this;
	}
	
	public function getProtocols()
	{
		return ($this->protocols);
	}
	
	private function setProtocols($protocols)
	{
		$this->protocols = $protocols;
	}
	
	public function getSuites()
	{
		return ($this->suites);
	}
	
	private function setSuites($suites)
	{
		$this->suites = $suites;
	}
	
	public function getServerSignature()
	{
		return ($this->serverSignature);
	}
	
	private function setServerSignature($serverSignature)
	{
		$this->serverSignature = $serverSignature;
	}
	
	public function getPrefixDelegation()
	{
		return ($this->prefixDelegation);
	}
	
	private function setPrefixDelegation($prefixDelegation)
	{
		$this->prefixDelegation = $prefixDelegation;
	}
	
	public function getNonPrefixDelegation()
	{
		return ($this->nonPrefixDelegation);
	}
	
	private function setNonPrefixDelegation($nonPrefixDelegation)
	{
		$this->nonPrefixDelegation = $nonPrefixDelegation;
	}
	
	public function getVulnBeast()
	{
		return ($this->vulnBeast);
	}
	
	private function setVulnBeast($vulnBeast)
	{
		$this->vulnBeast = $vulnBeast;
	}
	
	public function getRenegSupport()
	{
		return ($this->renegSupport);
	}
	
	private function setRenegSupport($renegSupport)
	{
		$this->renegSupport = $renegSupport;
	}
	
	public function getStsStatus()
	{
		return ($this->stsStatus);
	}
	
	private function setStsStatus($stsStatus)
	{
		$this->stsStatus = $stsStatus;
	}
	
	public function getStsReponseHeader()
	{
		return ($this->stsReponseHeader);
	}
	
	private function setStsReponseHeader($stsReponseHeader)
	{
		$this->stsReponseHeader = $stsReponseHeader;
	}
	
	public function getStsMaxAge()
	{
		return ($this->stsMaxAge);
	}
	
	private function setStsMaxAge($stsMaxAge)
	{
		$this->stsMaxAge = $stsMaxAge;
	}
	
	public function getStsSubdomains()
	{
		return ($this->stsSubdomains);
	}
	
	private function setStsSubdomains($stsSubdomains)
	{
		$this->stsSubdomains = $stsSubdomains;
	}
	
	public function getStsPreload()
	{
		return ($this->stsPreload);
	}
	
	private function setStsPreload($stsPreload)
	{
		$this->stsPreload = $stsPreload;
	}
	
	public function getPkpResponseHeader()
	{
		return ($this->pkpResponseHeader);
	}
	
	private function setPkpResponseHeader($pkpResponseHeader)
	{
		$this->pkpResponseHeader = $pkpResponseHeader;
	}
	
	public function getSessionResumption()
	{
		return ($this->sessionResumption);
	}
	
	private function setSessionResumption($sessionResumption)
	{
		$this->sessionResumption = $sessionResumption;
	}
	
	public function getCompressionMethods()
	{
		return ($this->compressionMethods);
	}
	
	private function setCompressionMethods($compressionMethods)
	{
		$this->compressionMethods = $compressionMethods;
	}
	
	public function getSuportsNpn()
	{
		return ($this->suportsNpn);
	}
	
	private function setSuportsNpn($suportsNpn)
	{
		$this->suportsNpn = $suportsNpn;
	}
	
	public function getNpnProtocols()
	{
		return ($this->npnProtocols);
	}
	
	private function setNpnProtocols($npnProtocols)
	{
		$this->npnProtocols = $npnProtocols;
	}
	
	public function getSessionTickets()
	{
		return ($this->sessionTickets);
	}
	
	private function setSessionTickets($sessionTickets)
	{
		$this->sessionTickets = $sessionTickets;
	}
	
	public function getOcspStapling()
	{
		return ($this->ocspStapling);
	}
	
	private function setOcspStapling($ocspStapling)
	{
		$this->ocspStapling = $ocspStapling;
	}
	
	public function getStaplingRevocationStatus()
	{
		return ($this->staplingRevocationStatus);
	}
	
	private function setStaplingRevocationStatus($staplingRevocationStatus)
	{
		$this->staplingRevocationStatus = $staplingRevocationStatus;
	}
	
	public function getStaplingRevocationErrorMessage()
	{
		return ($this->staplingRevocationErrorMessage);
	}
	
	private function setStaplingRevocationErrorMessage($staplingRevocationErrorMessage)
	{
		$this->staplingRevocationErrorMessage = $staplingRevocationErrorMessage;
	}
	
	public function getSniRequired()
	{
		return ($this->sniRequired);
	}
	
	private function setSniRequired($sniRequired)
	{
		$this->sniRequired = $sniRequired;
	}
	
	public function getHttpStatusCode()
	{
		return ($this->httpStatusCode);
	}
	
	private function setHttpStatusCode($httpStatusCode)
	{
		$this->httpStatusCode = $httpStatusCode;
	}
	
	public function getHttpForwarding()
	{
		return ($this->httpForwarding);
	}
	
	private function setHttpForwarding($httpForwarding)
	{
		$this->httpForwarding = $httpForwarding;
	}
	
	public function getSupportsRc4()
	{
		return ($this->supportsRc4);
	}
	
	private function setSupportsRc4($supportsRc4)
	{
		$this->supportsRc4 = $supportsRc4;
		return $this;
	}
	
	public function getRc4WithModern()
	{
		return ($this->rc4WithModern);
	}
	
	private function setRc4WithModern($rc4WithModern)
	{
		$this->rc4WithModern = $rc4WithModern;
	}
	
	public function getRc4Only()
	{
		return ($this->rc4Only);
	}
	
	private function setRc4Only($rc4Only)
	{
		$this->rc4Only = $rc4Only;
	}
	
	public function getForwardSecrecy()
	{
		return ($this->forwardSecrecy);
	}
	
	private function setForwardSecrecy($forwardSecrecy)
	{
		$this->forwardSecrecy = $forwardSecrecy;
	}
	
	public function getSims()
	{
		return ($this->sims);
	}
	
	private function setSims($sims)
	{
		$this->sims = $sims;
	}
	
	public function getHeartbleed()
	{
		return ($this->heartbleed);
	}
	
	private function setHeartbleed($heartbleed)
	{
		$this->heartbleed = $heartbleed;
	}
	
	public function getHeartbeat()
	{
		return ($this->heartbeat);
	}
	
	private function setHeartbeat($heartbeat)
	{
		$this->heartbeat = $heartbeat;
	}
	
	public function getOpenSslCcs()
	{
		return ($this->openSslCcs);
	}
	
	private function setOpenSslCcs($openSslCcs)
	{
		$this->openSslCcs = $openSslCcs;
	}
	
	public function getPoodle()
	{
		return ($this->poodle);
	}
	
	private function setPoodle($poodle)
	{
		$this->poodle = $poodle;
	}
	
	public function getPoodleTls()
	{
		return ($this->poodleTls);
	}
	
	private function setPoodleTls($poodleTls)
	{
		$this->poodleTls = $poodleTls;
	}
	
	public function getFallbackScsv()
	{
		return ($this->fallbackScsv);
	}
	
	private function setFallbackScsv($fallbackScsv)
	{
		$this->fallbackScsv = $fallbackScsv;
	}
	
	public function getFreak()
	{
		return ($this->freak);
	}
	
	private function setFreak($freak)
	{
		$this->freak = $freak;
	}
	
	public function getHasSct()
	{
		return ($this->hasSct);
	}
	
	private function setHasSct($hasSct)
	{
		$this->hasSct = $hasSct;
	}
	
	public function getDhPrimes()
	{
		return ($this->dhPrimes);
	}
	
	private function setDhPrimes($dhPrimes)
	{
		$this->dhPrimes = $dhPrimes;
	}
	
	public function getDhUsesKnownPrimes()
	{
		return ($this->dhUsesKnownPrimes);
	}
	
	private function setDhUsesKnownPrimes($dhUsesKnownPrimes)
	{
		$this->dhUsesKnownPrimes = $dhUsesKnownPrimes;
	}
	
	public function getDhYsReuse()
	{
		return ($this->dhYsReuse);
	}
	
	private function setDhYsReuse($dhYsReuse)
	{
		$this->dhYsReuse = $dhYsReuse;
	}
	
	public function getLogjam()
	{
		return ($this->logjam);
	}
	
	private function setLogjam($logjam)
	{
		$this->logjam = $logjam;
	}
	
	public function getChaCha20Preference()
	{
		return ($this->chaCha20Preference);
	}
	
	private function setChaCha20Preference($chaCha20Preference)
	{
		$this->chaCha20Preference = $chaCha20Preference;
	}
	
	/**
	 * {@inheritDoc}
	 *
	 * @return \BjoernrDe\SSLLabsApi\Objects\EndpointDetails
	 * @see \BjoernrDe\SSLLabsApi\Objects\ApiObject::populateObjectByApiResponse()
	 */
	public function populateObjectByApiResponse($jsonString)
	{
		$response = json_decode($jsonString);
		
// 		echo "<pre>";
// 		print_r($response);
// 		echo "</pre>";
// 		die();
		
		isset($response->hostStartTime) ? $this->setHostStartTime($response->hostStartTime) : '';
		
		if(isset($response->key) && !empty($response->key))
		{
			$keyObject = new Key();
			$keyObject->populateObjectByApiResponse(json_encode($response->key));
		
			$this->setKey($keyObject);
		}
		
		if(isset($response->cert) && !empty($response->cert))
		{
			$certObject = new Cert();
			$certObject->populateObjectByApiResponse(json_encode($response->cert));
			
			$this->setCert($certObject);
		}
		
		echo "<pre>";
		print_r($this);
		echo "</pre>";
		die();
		isset($response->statusMessage) ? $this->setStatusMessage($response->statusMessage) : '';
		isset($response->grade) ? $this->setGrade($response->grade) : '';
		isset($response->gradeTrustIgnored) ? $this->setGradeTrustIgnored($response->gradeTrustIgnored) : '';
		isset($response->hasWarnings) ? $this->setHasWarnings($response->hasWarnings) : '';
		isset($response->isExceptional) ? $this->setIsExceptional($response->isExceptional) : '';
		isset($response->progress) ? $this->setProgress($response->progress) : '';
		isset($response->duration) ? $this->setDuration($response->duration) : '';
		isset($response->eta) ? $this->setEta($response->eta) : '';
		isset($response->delegation) ? $this->setDelegation($response->delegation) : '';
		//TODO: $response->details (EndpointDetail object)
	
		return ($this);
	}
}