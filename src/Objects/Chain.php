<?php
namespace BjoernrDe\SSLLabsApi\Objects;

class Chain implements ApiObject
{
	private $chain = array();
	private $issues;
	
	public function getChain()
	{
		return ($this->chain);
	}
	
	private function setChain($chain)
	{
		$this->chain = $chain;
	}
	
	public function getIssues()
	{
		return ($this->issues);
	}
	
	private function setIssues($issues)
	{
		$this->issues = $issues;
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