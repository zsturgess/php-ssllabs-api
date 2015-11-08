<?php

namespace BjoernrDe\SslLabs\Tests\Model;

use BjoernrDe\SslLabs\Model\Grade;

/**
 * GradeTest
 */
class GradeTest extends \PHPUnit_Framework_TestCase {
    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Z is not a valid grade. Expecting one of: A+, A, A-, B, C, D, E, F, M, T
     */
    public function testConstructWithInvalidGrade() {
        $grade = new Grade('Z');
    }
    
    public function testConstructWithLowercaseGrade() {
        $grade1 = new Grade('b');
        $grade2 = new Grade('a-');
        
        $this->assertEquals('B', $grade1->getGrade());
        $this->assertEquals('A-', $grade2->getGrade());
        $this->assertEquals('B', (string) $grade1);
        $this->assertEquals('A-', (string) $grade2);
    }
    
    public function testCompareTo() {
        $grade1 = new Grade('b');
        $grade2 = new Grade('a-');
        
        $this->assertEquals(-1, $grade1->compareTo($grade2));
        $this->assertEquals(1, $grade2->compareTo($grade1));
        $this->assertEquals(0, $grade1->compareTo($grade1));
    }
    
    public function testIsSecure() {
        $grade1 = new Grade('b');
        $grade2 = new Grade('a-');
        
        $this->assertFalse($grade1->isSecure());
        $this->assertTrue($grade2->isSecure());
    }
}
