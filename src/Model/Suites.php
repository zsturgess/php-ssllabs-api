<?php

namespace BjoernrDe\SSLLabsApi\Model;

class Suites
{
    private $list = array();
    private $preference;
    
    public function getList() {
        return $this->list;
    }

    public function getPreference() {
        return $this->preference;
    }

    protected function setList($list) {
        if (!is_array($list)) {
            $list = [$list];
        }
        
        foreach ($list as $key => $suite) {
            if (!$suite instanceof Suite) {
                $list[$key] = new Suite($suite);
            }
        }
        
        $this->list = $list;
    }

    protected function setPreference($preference) {
        $this->preference = $preference;
    }


}
