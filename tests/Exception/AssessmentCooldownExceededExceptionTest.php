<?php

namespace BjoernrDe\SSLLabsApi\Tests\Exception;

use BjoernrDe\SSLLabsApi\Exception\AssessmentCooldownExceededException;

/**
 * AssessmentCooldownExceededExceptionTest
 */
class AssessmentCooldownExceededExceptionTest extends \PHPUnit_Framework_TestCase {
    public function testConstructor() {
        $date = new \DateTime();
        
        try {
            throw new AssessmentCooldownExceededException($date);
        } catch (AssessmentCooldownExceededException $e) {
            $this->assertEquals('You have attempted to start a new assessment too soon after starting the previous one. You should wait until ' . $date->format('Y-m-d H:i:s') . ' and try again.', $e->getMessage());
            return;
        }
        
        $this->fail('AssessmentCooldownExceededException not thrown when expected');
    }
}
