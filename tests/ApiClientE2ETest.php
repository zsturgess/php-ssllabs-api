<?php

namespace BjoernrDe\SSLLabsApi\Tests;

use BjoernrDe\SSLLabsApi\ApiClient;

/**
 * ApiClientE2ETest
 * @group E2E
 */
class ApiClientE2ETest extends \PHPUnit_Framework_TestCase
{
    private $apiClient;
    
    public function setUp()
    {
        $this->apiClient = new ApiClient('dev');
    }
    
    public function testGetApiInformation()
    {
        $response = $this->apiClient->getApiInformation();
        
        $this->assertInstanceOf('BjoernrDe\SSLLabsApi\Model\Info', $response);
        $this->assertRegExp('/1\.[0-9]+\.[0-9]+/', $response->getEngineVersion());
        $this->assertRegExp('/[0-9]{4}[a-z]+/', $response->getCriteriaVersion());
        $this->assertInternalType('integer', $response->getClientMaxAssessments());
        $this->assertInternalType('integer', $response->getMaxAssessments());
        $this->assertInternalType('integer', $response->getCurrentAssessments());
        $this->assertLessThanOrEqual($response->getClientMaxAssessments(), $response->getCurrentAssessments());
        $this->assertLessThanOrEqual($response->getMaxAssessments(), $response->getCurrentAssessments());
        $this->assertInternalType('integer', $response->getNewAssessmentCoolOff());
        $this->assertInternalType('array', $response->getMessages());
        $this->assertContains('This assessment service is provided free of charge by Qualys SSL Labs, subject to our terms and conditions: https://dev.ssllabs.com/about/terms.html', $response->getMessages());
    }
    
    public function testGetEndpointInformation()
    {
        $response = $this->apiClient->getEndpointInformation('www.ssllabs.com', '64.41.200.100');
        
        $this->assertInstanceOf('BjoernrDe\SSLLabsApi\Model\Endpoint', $response);
        $this->assertEquals('64.41.200.100', $response->getIpAddress());
        $this->assertEquals('www.ssllabs.com', $response->getServerName());
        $this->assertInternalType('string', $response->getStatusMessage());
        $this->assertRegExp('/(A[\+\-]?)|[B-F]|M|T/', $response->getGrade());
        $this->assertRegExp('/(A[\+\-]?)|[B-F]|M|T/', $response->getGradeTrustIgnored());
        $this->assertInternalType('boolean', $response->getHasWarnings());
        $this->assertInternalType('boolean', $response->getIsExceptional());
        $this->assertInternalType('integer', $response->getProgress());
        $this->assertGreaterThanOrEqual(0, $response->getProgress());
        $this->assertLessThanOrEqual(100, $response->getProgress());
        $this->assertInternalType('integer', $response->getDuration());
        $this->assertInstanceOf('DateTime', $response->getEta());
        $this->assertInternalType('integer', $response->getDelegation());
        $this->assertGreaterThanOrEqual(1, $response->getDelegation());
        $this->assertLessThanOrEqual(2, $response->getDelegation());
        $this->assertInstanceOf('BjoernrDe\SSLLabsApi\Model\EndpointDetails', $response->getDetails());
        
        // @todo: Lots more testing of details
    }
    
    public function testGetRootCertsRaw() {
        $response = $this->apiClient->getRootCertsRaw();
        
        $this->assertInternalType('array', $response);
        $this->assertGreaterThan(1, count($response));
        
        foreach ($response as $cert) {
            $this->assertInternalType('string', $cert);
            $this->assertContains('-----BEGIN CERTIFICATE-----', $cert);
            $this->assertStringEndsWith('-----END CERTIFICATE-----', $cert);
        }
    }
}
