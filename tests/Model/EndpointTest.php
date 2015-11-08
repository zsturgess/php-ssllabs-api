<?php

namespace BjoernrDe\SslLabs\Tests\Model;

/**
 * EndpointTest
 */
class EndpointTest extends BaseModelTestCase {
    public function getClassUnderTest() {
        return 'Endpoint';
    }
    
    public function getInputDataSet() {
        return [
            "ipAddress" => "8.8.8.8",
            "serverName" => "a.public-dns.google.com",
            "statusMessage" => "statusMessage",
            "statusDetails" => "statusDetails",
            "statusDetailsMessage" => "statusDetailsMessage",
            "grade" => "D",
            "gradeTrustIgnored" => "A+",
            "hasWarnings" => true,
            "isExceptional" => false,
            "progress" => 93,
            "duration" => 61473,
            "eta" => 7,
            "delegation" => "delegation",
            "fakeDetails" => false //This property isn't used by Endpoint, but we use it to test hasDetails() returns false my mapping it below
        ];
    }
    
    public function mapPropertiesToGetters() {
        return [
            "hasWarnings" => "hasWarnings",
            "isExceptional" => "isExceptional",
            "fakeDetails" => "hasDetails"
        ];
    }
    
    public function mapPropertiesToExpectedValues() {
        return [
            "grade" => new \BjoernrDe\SslLabs\Model\Grade("D"),
            "gradeTrustIgnored" => new \BjoernrDe\SslLabs\Model\Grade("A+"),
            "duration" => 61,
            "eta" => new \DateTime('+ 7 seconds')
        ];
    }
}
