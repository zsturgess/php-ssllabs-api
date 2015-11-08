<?php

namespace BjoernrDe\SslLabs\Tests\Exception;

use BjoernrDe\SslLabs\Exception\QualysUnavailableException;

/**
 * QualysUnavailableExceptionTest
 */
class QualysUnavailableExceptionTest extends \PHPUnit_Framework_TestCase {
    public function dataProvider() {
        return [
            ["bears let loose in the server room", new \DateTime('+15 minutes')],
            ["an unsupervised water fight", new \DateTime('+23 minutes')]
        ];
    }
    
    /**
     * 
     * @dataProvider dataProvider
     */
    public function testConstructor($reason, $date) {
        try {
            throw new QualysUnavailableException($reason, $date);
        } catch (QualysUnavailableException $e) {
            $this->assertEquals('Qualys SSL Labs is currently unavailable due to ' . $reason . '. You should wait until ' . $date->format('Y-m-d H:i:s') . ' and try again.', $e->getMessage());
            return;
        }
        
        $this->fail('QualysUnavailableException not thrown when expected');
    }
}
