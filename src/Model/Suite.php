<?php

namespace BjoernrDe\SSLLabsApi\Model;

class Suite
{
    private $id;
    private $name;
    private $cipherStrength;
    private $dhStrength;
    private $dhP;
    private $dhG;
    private $dhYs;
    private $ecdhBits;
    private $ecdhStrength;
    private $q;
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCipherStrength() {
        return $this->cipherStrength;
    }

    public function getDhStrength() {
        return $this->dhStrength;
    }

    public function getDhP() {
        return $this->dhP;
    }

    public function getDhG() {
        return $this->dhG;
    }

    public function getDhYs() {
        return $this->dhYs;
    }

    public function getEcdhBits() {
        return $this->ecdhBits;
    }

    public function getEcdhStrength() {
        return $this->ecdhStrength;
    }

    public function getQ() {
        return $this->q;
    }

    protected function setId($id) {
        $this->id = $id;
        return $this;
    }

    protected function setName($name) {
        $this->name = $name;
        return $this;
    }

    protected function setCipherStrength($cipherStrength) {
        $this->cipherStrength = $cipherStrength;
        return $this;
    }

    protected function setDhStrength($dhStrength) {
        $this->dhStrength = $dhStrength;
        return $this;
    }

    protected function setDhP($dhP) {
        $this->dhP = $dhP;
        return $this;
    }

    protected function setDhG($dhG) {
        $this->dhG = $dhG;
        return $this;
    }

    protected function setDhYs($dhYs) {
        $this->dhYs = $dhYs;
        return $this;
    }

    protected function setEcdhBits($ecdhBits) {
        $this->ecdhBits = $ecdhBits;
        return $this;
    }

    protected function setEcdhStrength($ecdhStrength) {
        $this->ecdhStrength = $ecdhStrength;
        return $this;
    }

    protected function setQ($q) {
        $this->q = $q;
        return $this;
    }


}
