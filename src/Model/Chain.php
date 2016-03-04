<?php

namespace BjoernrDe\SSLLabsApi\Model;

class Chain extends ApiObject
{
    private $chain = array();
    private $issues;

    public function getChain()
    {
        return $this->chain;
    }

    protected function setChain($chain)
    {
        if (!is_array($chain)) {
            $chain = [$chain];
        }
        
        foreach ($chain as $key => $cert) {
            if (!$cert instanceof ChainCert) {
                $chain[$key] = new ChainCert($cert);
            }
        }
        
        $this->chain = $chain;
    }

    public function getIssues()
    {
        return $this->issues;
    }

    protected function setIssues($issues)
    {
        $this->issues = $issues;
    }
}
