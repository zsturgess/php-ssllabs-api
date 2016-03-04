<?php

namespace BjoernrDe\SSLLabsApi\Tests\Model;

/**
 * EndpointTest
 */
class EndpointTest extends BaseModelTestCase {
    public function getClassUnderTest() {
        return 'Endpoint';
    }
    
    public function getInputDataSet() {
        return [
            'ipAddress' => '8.8.8.8',
            'serverName' => 'a.public-dns.google.com',
            'statusMessage' => 'statusMessage',
            'statusDetails' => 'statusDetails',
            'statusDetailsMessage' => 'statusDetailsMessage',
            'grade' => 'D',
            'gradeTrustIgnored' => 'A+',
            'hasWarnings' => true,
            'isExceptional' => false,
            'progress' => 93,
            'duration' => 61473,
            'eta' => 7,
            'delegation' => 2
        ];
    }
    
    public function mapPropertiesToGetters() {
        return [];
    }
    
    public function mapPropertiesToExpectedValues() {
        return [
            'eta' => new \DateTime('+ 7 seconds')
        ];
    }
}
