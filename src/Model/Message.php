<?php

namespace BjoernrDe\SslLabs\Model;

/**
 * Message
 */
class Message {
    const PRIVATE_PREFIX = '[Private]';
    
    private $private = false;
    private $text;
    
    public function __construct($message) {
        if (stristr($message, self::PRIVATE_PREFIX) !== FALSE) {
            $this->private = true;
            $this->text = trim(str_replace(self::PRIVATE_PREFIX, '', $message));
        } else {
            $this->text = trim($message);
        }
    }
    
    public function isPrivate() {
        return $this->private;
    }
    
    public function getText() {
        return $this->text;
    }
    
    public function __toString() {
        if ($this->isPrivate()) {
            return self::PRIVATE_PREFIX . ' ' . $this->getText();
        } else {
            return $this->getText();
        }
    }
}
