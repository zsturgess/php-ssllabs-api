<?php

namespace BjoernrDe\SSLLabsApi\Model;

class StatusCodes
{
    private $statusDetails = [];
    
    public function getStatusDetails() {
        return $this->statusDetails;
    }

    protected function setStatusDetails($statusDetails) {
        $this->statusDetails = $statusDetails;
        return $this;
    }
}
