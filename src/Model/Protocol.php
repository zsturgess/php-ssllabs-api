<?php

namespace BjoernrDe\SSLLabsApi\Model;

class Protocol
{
    private $id;
    private $name;
    private $version;
    private $v2SuitesDisabled;
    private $q;
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getVersion() {
        return $this->version;
    }

    public function getV2SuitesDisabled() {
        return $this->v2SuitesDisabled;
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

    protected function setVersion($version) {
        $this->version = $version;
        return $this;
    }

    protected function setV2SuitesDisabled($v2SuitesDisabled) {
        $this->v2SuitesDisabled = $v2SuitesDisabled;
        return $this;
    }

    protected function setQ($q) {
        $this->q = $q;
        return $this;
    }


}
