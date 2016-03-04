<?php

namespace BjoernrDe\SSLLabsApi\Tests\Model;

use BjoernrDe\SSLLabsApi\Model\SimClient;

/**
 * SimulationTest
 */
class SimulationTest extends BaseModelTestCase {
    private $client = '{"id":112,"name":"Apple ATS","platform":"iOS 9","version":"9","isReference":true}';
    
    public function getClassUnderTest() {
        return 'Simulation';
    }
    
    public function getInputDataSet() {
        return [
            'client' => json_decode($this->client),
            'errorCode' => 0,
            'attempts' => 1,
            'protocolId' => 771,
            'suiteId' => 49199
        ];
    }
    
    public function mapPropertiesToGetters() {
        return [];
    }
    
    public function mapPropertiesToExpectedValues() {
        return [
            'client' => new SimClient($this->client)
        ];
    }
}
