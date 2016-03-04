<?php

namespace BjoernrDe\SSLLabsApi\Model;

class SimClient
{
    private $id;
    private $name;
    private $platform;
    private $version;
    private $isReference;
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPlatform() {
        return $this->platform;
    }

    public function getVersion() {
        return $this->version;
    }

    public function getIsReference() {
        return $this->isReference;
    }

    protected function setId($id) {
        $this->id = $id;
        return $this;
    }

    protected function setName($name) {
        $this->name = $name;
        return $this;
    }

    protected function setPlatform($platform) {
        $this->platform = $platform;
        return $this;
    }

    protected function setVersion($version) {
        $this->version = $version;
        return $this;
    }

    protected function setIsReference($isReference) {
        $this->isReference = $isReference;
        return $this;
    }


}
