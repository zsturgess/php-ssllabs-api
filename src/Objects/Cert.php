<?php
namespace BjoernrDe\SSLLabsApi\Objects;

class Cert implements ApiObject
{
	private $subject;
	private $commonNames = array();
	private $altNames = array();
	private $notBefore;
	private $notAfter;
	private $issuerSubject;
	private $sigAlg;
	private $issuerLabel;
	private $revocationInfo;
	private $crlURIs = array();
	private $ocspURIs = array();
	private $revocationStatus;
	private $crlRevocationStatus;
	private $ocspRevocationStatus;
	private $sgc;
	private $validationType;
	private $issues;
	private $sct;
	private $sha1Hash;
	private $pinSha256;
	
	public function getSubject()
	{
		return ($this->subject);
	}
	
	private function setSubject($subject)
	{
		$this->subject = $subject;
	}
	
	public function getCommonNames()
	{
		return ($this->commonNames);
	}
	
	private function setCommonNames($commonNames)
	{
		$this->commonNames = (array) $commonNames;
	}
	
	public function getAltNames()
	{
		return ($this->altNames);
	}
	
	private function setAltNames($altNames)
	{
		$this->altNames = (array) $altNames;
	}
	
	public function getNotBefore()
	{
		return ($this->notBefore);
	}
	
	private function setNotBefore($notBefore)
	{
		$this->notBefore = $notBefore;
	}
	
	public function getNotAfter()
	{
		return ($this->notAfter);
	}
	
	private function setNotAfter($notAfter)
	{
		$this->notAfter = $notAfter;
	}
	
	public function getIssuerSubject()
	{
		return ($this->issuerSubject);
	}
	
	private function setIssuerSubject($issuerSubject)
	{
		$this->issuerSubject = $issuerSubject;
	}
	
	public function getSigAlg()
	{
		return ($this->sigAlg);
	}
	
	private function setSigAlg($sigAlg)
	{
		$this->sigAlg = $sigAlg;
	}
	
	public function getIssuerLabel()
	{
		return ($this->issuerLabel);
	}
	
	private function setIssuerLabel($issuerLabel)
	{
		$this->issuerLabel = $issuerLabel;
	}
	
	public function getRevocationInfo()
	{
		return ($this->revocationInfo);
	}
	
	private function setRevocationInfo($revocationInfo)
	{
		$this->revocationInfo = $revocationInfo;
	}
	
	public function getCrlURIs()
	{
		return ($this->crlURIs);
	}
	
	private function setCrlURIs($crlURIs)
	{
		$this->crlURIs = (array) $crlURIs;
	}
	
	public function getOcspURIs()
	{
		return ($this->ocspURIs);
	}
	
	private function setOcspURIs($ocspURIs)
	{
		$this->ocspURIs = (array) $ocspURIs;
	}
	
	public function getRevocationStatus()
	{
		return ($this->revocationStatus);
	}
	
	private function setRevocationStatus($revocationStatus)
	{
		$this->revocationStatus = $revocationStatus;
	}
	
	public function getCrlRevocationStatus()
	{
		return ($this->crlRevocationStatus);
	}
	
	private function setCrlRevocationStatus($crlRevocationStatus)
	{
		$this->crlRevocationStatus = $crlRevocationStatus;
	}
	
	public function getOcspRevocationStatus()
	{
		return ($this->ocspRevocationStatus);
	}
	
	private function setOcspRevocationStatus($ocspRevocationStatus)
	{
		$this->ocspRevocationStatus = $ocspRevocationStatus;
	}
	
	public function getSgc()
	{
		return ($this->sgc);
	}
	
	private function setSgc($sgc)
	{
		$this->sgc = $sgc;
	}
	
	public function getValidationType()
	{
		return ($this->validationType);
	}
	
	private function setValidationType($validationType)
	{
		$this->validationType = $validationType;
	}
	
	public function getIssues()
	{
		return ($this->issues);
	}
	
	private function setIssues($issues)
	{
		$this->issues = $issues;
	}
	
	public function getSct()
	{
		return ($this->sct);
	}
	
	private function setSct($sct)
	{
		$this->sct = $sct;
	}
	
	public function getSha1Hash()
	{
		return ($this->sha1Hash);
	}
	
	private function setSha1Hash($sha1Hash)
	{
		$this->sha1Hash = $sha1Hash;
	}
	
	public function getPinSha256()
	{
		return ($this->pinSha256);
	}
	
	private function setPinSha256($pinSha256)
	{
		$this->pinSha256 = $pinSha256;
	}
		
	/**
	 * {@inheritDoc}
	 *
	 * @return \SSLLabsApi\Objects\Cert
	 * @see \SSLLabsApi\Objects\ApiObject::populateObjectByApiResponse()
	 */
	public function populateObjectByApiResponse($jsonString)
	{
		$response = json_decode($jsonString);
		
		isset($response->subject) ? $this->setSubject($response->subject) : '';
		isset($response->commonNames) ? $this->setCommonNames($response->commonNames) : '';
		isset($response->altNames) ? $this->setAltNames($response->altNames) : '';
		isset($response->notBefore) ? $this->setNotBefore($response->notBefore) : '';
		isset($response->notAfter) ? $this->setNotAfter($response->notAfter) : '';
		isset($response->issuerSubject) ? $this->setIssuerSubject($response->issuerSubject) : '';
		isset($response->issuerLabel) ? $this->setIssuerLabel($response->issuerLabel) : '';
		isset($response->sigAlg) ? $this->setSigAlg($response->sigAlg) : '';
		isset($response->revocationInfo) ? $this->setRevocationInfo($response->revocationInfo) : '';
		isset($response->crlURIs) ? $this->setCrlURIs($response->crlURIs) : '';
		isset($response->ocspURIs) ? $this->setOcspURIs($response->ocspURIs) : '';
		isset($response->revocationStatus) ? $this->setRevocationStatus($response->revocationStatus) : '';
		isset($response->crlRevocationStatus) ? $this->setCrlRevocationStatus($response->crlRevocationStatus) : '';
		isset($response->ocspRevocationStatus) ? $this->setOcspRevocationStatus($response->ocspRevocationStatus) : '';
		isset($response->sgc) ? $this->setSgc($response->sgc) : '';
		isset($response->issues) ? $this->setIssues($response->issues) : '';
		isset($response->sct) ? $this->setSct($response->sct) : '';
		isset($response->sha1Hash) ? $this->setSha1Hash($response->sha1Hash) : '';
		isset($response->pinSha256) ? $this->setPinSha256($response->pinSha256) : '';
		
		return ($this);
	}
	
}