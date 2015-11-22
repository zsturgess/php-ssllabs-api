<?php
namespace BjoernrDe\SSLLabsApi\Model;

class Cert extends ApiObject
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
	
	protected function setSubject($subject)
	{
		$this->subject = $subject;
	}
	
	public function getCommonNames()
	{
		return ($this->commonNames);
	}
	
	protected function setCommonNames($commonNames)
	{
		$this->commonNames = (array) $commonNames;
	}
	
	public function getAltNames()
	{
		return ($this->altNames);
	}
	
	protected function setAltNames($altNames)
	{
		$this->altNames = (array) $altNames;
	}
	
	public function getNotBefore()
	{
		return ($this->notBefore);
	}
	
	protected function setNotBefore($notBefore)
	{
		$this->notBefore = $notBefore;
	}
	
	public function getNotAfter()
	{
		return ($this->notAfter);
	}
	
	protected function setNotAfter($notAfter)
	{
		$this->notAfter = $notAfter;
	}
	
	public function getIssuerSubject()
	{
		return ($this->issuerSubject);
	}
	
	protected function setIssuerSubject($issuerSubject)
	{
		$this->issuerSubject = $issuerSubject;
	}
	
	public function getSigAlg()
	{
		return ($this->sigAlg);
	}
	
	protected function setSigAlg($sigAlg)
	{
		$this->sigAlg = $sigAlg;
	}
	
	public function getIssuerLabel()
	{
		return ($this->issuerLabel);
	}
	
	protected function setIssuerLabel($issuerLabel)
	{
		$this->issuerLabel = $issuerLabel;
	}
	
	public function getRevocationInfo()
	{
		return ($this->revocationInfo);
	}
	
	protected function setRevocationInfo($revocationInfo)
	{
		$this->revocationInfo = $revocationInfo;
	}
	
	public function getCrlURIs()
	{
		return ($this->crlURIs);
	}
	
	protected function setCrlURIs($crlURIs)
	{
		$this->crlURIs = (array) $crlURIs;
	}
	
	public function getOcspURIs()
	{
		return ($this->ocspURIs);
	}
	
	protected function setOcspURIs($ocspURIs)
	{
		$this->ocspURIs = (array) $ocspURIs;
	}
	
	public function getRevocationStatus()
	{
		return ($this->revocationStatus);
	}
	
	protected function setRevocationStatus($revocationStatus)
	{
		$this->revocationStatus = $revocationStatus;
	}
	
	public function getCrlRevocationStatus()
	{
		return ($this->crlRevocationStatus);
	}
	
	protected function setCrlRevocationStatus($crlRevocationStatus)
	{
		$this->crlRevocationStatus = $crlRevocationStatus;
	}
	
	public function getOcspRevocationStatus()
	{
		return ($this->ocspRevocationStatus);
	}
	
	protected function setOcspRevocationStatus($ocspRevocationStatus)
	{
		$this->ocspRevocationStatus = $ocspRevocationStatus;
	}
	
	public function getSgc()
	{
		return ($this->sgc);
	}
	
	protected function setSgc($sgc)
	{
		$this->sgc = $sgc;
	}
	
	public function getValidationType()
	{
		return ($this->validationType);
	}
	
	protected function setValidationType($validationType)
	{
		$this->validationType = $validationType;
	}
	
	public function getIssues()
	{
		return ($this->issues);
	}
	
	protected function setIssues($issues)
	{
		$this->issues = $issues;
	}
	
	public function getSct()
	{
		return ($this->sct);
	}
	
	protected function setSct($sct)
	{
		$this->sct = $sct;
	}
	
	public function getSha1Hash()
	{
		return ($this->sha1Hash);
	}
	
	protected function setSha1Hash($sha1Hash)
	{
		$this->sha1Hash = $sha1Hash;
	}
	
	public function getPinSha256()
	{
		return ($this->pinSha256);
	}
	
	protected function setPinSha256($pinSha256)
	{
		$this->pinSha256 = $pinSha256;
	}
	
}