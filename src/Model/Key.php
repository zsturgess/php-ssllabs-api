<?php
namespace BjoernrDe\SSLLabsApi\Model;

class Key extends ApiObject
{
	private $size;
	private $strength;
	private $alg;
	private $debianFlaw;
	private $q;
	
	public function getSize()
	{
		return ($this->size);
	}
	
	private function setSize($size)
	{
		$this->size = $size;
	}
	
	public function getStrength()
	{
		return ($this->strength);
	}
	
	private function setStrength($strength)
	{
		$this->strength = $strength;
	}
	
	public function getAlg()
	{
		return ($this->alg);
	}
	
	private function setAlg($alg)
	{
		$this->alg = $alg;
	}
	
	public function getDebianFlaw()
	{
		return ($this->debianFlaw);
	}
	
	private function setDebianFlaw($debianFlaw)
	{
		$this->debianFlaw = $debianFlaw;
	}
	
	public function getQ()
	{
		return ($this->q);
	}
	
	private function setQ($q)
	{
		$this->q = $q;
	}
	
	/**
	 * {@inheritDoc}
	 *
	 * @return \BjoernrDe\SSLLabsApi\Objects\Key
	 * @see \BjoernrDe\SSLLabsApi\Objects\ApiObject::populateObjectByApiResponse()
	 */
	public function populateObjectByApiResponse($response)
	{
		
	
		isset($response->size) ? $this->setSize($response->size) : '';
		isset($response->alg) ? $this->setAlg($response->alg) : '';
		isset($response->debianFlaw) ? $this->setDebianFlaw($response->debianFlaw) : '';
		isset($response->strength) ? $this->setStrength($response->strength) : '';
		isset($response->q) ? $this->setQ($response->q) : '';
		
		return ($this);
	}
}