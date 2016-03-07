<?php

namespace BjoernrDe\SSLLabsApi\Tests\Model;

use BjoernrDe\SSLLabsApi\Model\Suite;

/**
 * SuitesTest
 */
class SuitesTest extends BaseModelTestCase {
    private $suites = [
        '{"id":49199,"name":"TLS_ECDHE_RSA_WITH_AES_128_GCM_SHA256","cipherStrength":128,"ecdhBits":256,"ecdhStrength":3072}',
        '{"id":49200,"name":"TLS_ECDHE_RSA_WITH_AES_256_GCM_SHA384","cipherStrength":256,"ecdhBits":256,"ecdhStrength":3072}',
        '{"id":158,"name":"TLS_DHE_RSA_WITH_AES_128_GCM_SHA256","cipherStrength":128,"dhStrength":2048,"dhP":256,"dhG":1,"dhYs":256}',
        '{"id":159,"name":"TLS_DHE_RSA_WITH_AES_256_GCM_SHA384","cipherStrength":256,"dhStrength":2048,"dhP":256,"dhG":1,"dhYs":256}',
        '{"id":49191,"name":"TLS_ECDHE_RSA_WITH_AES_128_CBC_SHA256","cipherStrength":128,"ecdhBits":256,"ecdhStrength":3072}',
        '{"id":49171,"name":"TLS_ECDHE_RSA_WITH_AES_128_CBC_SHA","cipherStrength":128,"ecdhBits":256,"ecdhStrength":3072}',
        '{"id":49192,"name":"TLS_ECDHE_RSA_WITH_AES_256_CBC_SHA384","cipherStrength":256,"ecdhBits":256,"ecdhStrength":3072}',
        '{"id":49172,"name":"TLS_ECDHE_RSA_WITH_AES_256_CBC_SHA","cipherStrength":256,"ecdhBits":256,"ecdhStrength":3072}',
        '{"id":103,"name":"TLS_DHE_RSA_WITH_AES_128_CBC_SHA256","cipherStrength":128,"dhStrength":2048,"dhP":256,"dhG":1,"dhYs":256}',
        '{"id":51,"name":"TLS_DHE_RSA_WITH_AES_128_CBC_SHA","cipherStrength":128,"dhStrength":2048,"dhP":256,"dhG":1,"dhYs":256}'
    ];
    
    public function getClassUnderTest() {
        return 'Suites';
    }
    
    public function getInputDataSet() {
        return [
            'list' => json_decode('[' . implode(',', $this->suites) . ']'),
            'preference' => true
        ];
    }
    
    public function mapPropertiesToGetters() {
        return [];
    }
    
    public function mapPropertiesToExpectedValues() {
        $expectedResults = [];
        
        foreach ($this->suites as $suite) {
            $expectedResults[] = new Suite($suite);
        }
        
        return [
            'list' => $expectedResults
        ];
    }
}
