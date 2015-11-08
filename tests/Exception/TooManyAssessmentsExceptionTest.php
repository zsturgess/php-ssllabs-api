<?php

namespace BjoernrDe\SslLabs\Tests\Exception;

use BjoernrDe\SslLabs\Exception\TooManyAssessmentsException;

/**
 * TooManyAssessmentsExceptionTest
 */
class TooManyAssessmentsExceptionTest extends \PHPUnit_Framework_TestCase {
    public function dataProvider() {
        return [
            [0],
            [1],
            [15],
            [1337]
        ];
    }
    
    /**
     * 
     * @dataProvider dataProvider
     */
    public function testConstructor($max) {
        try {
            throw new TooManyAssessmentsException($max);
        } catch (TooManyAssessmentsException $e) {
            $this->assertEquals('You have been allowed to run up to ' . $max . ' concurrent assessments by Qualys SSL Labs and have exceeded this limit. Please try again later.', $e->getMessage());
            return;
        }
        
        $this->fail('TooManyAssessmentsException not thrown when expected');
    }
}
