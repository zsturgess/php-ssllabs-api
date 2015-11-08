<?php

namespace BjoernrDe\SslLabs\Tests\Model;

use BjoernrDe\SslLabs\Model\Message;

/**
 * MessageTest
 */
class MessageTest extends \PHPUnit_Framework_TestCase {
    const TEST_STRING = 'This is a message';
    
    private $private;
    private $public;
    private $publicWithWhitespace;
    
    public function setUp() {
        $this->public = $this->createMessage();
        $this->private = $this->createMessage(true);
        $this->publicWithWhitespace = $this->createMessage(false, '  ' . self::TEST_STRING . '  ' . PHP_EOL);
    }
    
    public function testStringCasting() {
        $this->assertEquals(self::TEST_STRING, (string) $this->public);
        $this->assertEquals(Message::PRIVATE_PREFIX . ' ' . self::TEST_STRING, (string) $this->private);
        $this->assertEquals(self::TEST_STRING, (string) $this->publicWithWhitespace);
    }
    
    public function testIsPrivate() {
        $this->assertFalse($this->public->isPrivate());
        $this->assertFalse($this->publicWithWhitespace->isPrivate());
        $this->assertTrue($this->private->isPrivate());
    }
    
    public function testGetText() {
        $this->assertEquals(self::TEST_STRING, $this->public->getText());
        $this->assertEquals(self::TEST_STRING, $this->private->getText());
        $this->assertEquals(self::TEST_STRING, $this->publicWithWhitespace->getText());
    }
    
    private function createMessage($private = false, $string = self::TEST_STRING) {
        if ($private) {
            $string = '[Private] ' . $string;
        }
        
        return new Message($string);
    }
}
