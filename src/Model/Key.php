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
	
	protected function setSize($size)
	{
		$this->size = $size;
	}
	
	public function getStrength()
	{
		return ($this->strength);
	}
	
	protected function setStrength($strength)
	{
		$this->strength = $strength;
	}
	
	public function getAlg()
	{
		return ($this->alg);
	}
	
	protected function setAlg($alg)
	{
		$this->alg = $alg;
	}
	
	public function getDebianFlaw()
	{
		return ($this->debianFlaw);
	}
	
	protected function setDebianFlaw($debianFlaw)
	{
		$this->debianFlaw = $debianFlaw;
	}
	
	public function getQ()
	{
		return ($this->q);
	}
	
	protected function setQ($q)
	{
		$this->q = $q;
	}
}