<?php

namespace BjoernrDe\SSLLabsApi\Tests\Model;

use BjoernrDe\SSLLabsApi\Model\Endpoint;

/**
 * HostTest
 */
class HostTest extends BaseModelTestCase {
    private $endpoint = '{"ipAddress": "79.215.4.16","serverName": "ec2-79-215-4-16.eu-west-1.compute.amazonaws.com","statusMessage": "Ready","grade": "A","gradeTrustIgnored": "A","hasWarnings": false,"isExceptional": false,"progress": 100,"duration": 133647,"eta": 3,"delegation": 2}';
    
    public function getClassUnderTest() {
        return 'Host';
    }
    
    public function getInputDataSet() {
        return [
            'host' => 'www.example.com',
            'endpoints' => json_decode('[' . $this->endpoint . ']')
        ];
    }
    
    public function mapPropertiesToGetters() {
        return [];
    }
    
    public function mapPropertiesToExpectedValues() {
        return [
            'endpoints' => [
                new Endpoint($this->endpoint)
            ]
        ];
    }
}
