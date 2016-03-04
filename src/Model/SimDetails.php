<?php

namespace BjoernrDe\SSLLabsApi\Model;

class SimDetails extends ApiObject
{
    private $results = array();
    
    public function getResults() {
        return $this->results;
    }

    protected function setResults($results) {
        if (!is_array($results)) {
            $results = [$results];
        }
        
        foreach ($results as $key => $sim) {
            if (!$sim instanceof Simulation) {
                $results[$key] = new Simulation($sim);
            }
        }
        
        $this->results = $results;
    }
}
