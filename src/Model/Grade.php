<?php

namespace BjoernrDe\SslLabs\Model;

/**
 * Grade
 */
class Grade {
    private $grade;
    
    public function __construct($grade) {
        $grade = strtoupper($grade);
        
        if (!array_key_exists($grade, self::getPossibleValues())) {
            throw new \InvalidArgumentException(
                $grade . ' is not a valid grade. Expecting one of: ' . implode(', ', array_keys(self::getPossibleValues()))
            );
        }
        
        $this->grade = $grade;
    }
    
    public function __toString() {
        return $this->getGrade();
    }
    
    public function getGrade() {
        return $this->grade;
    }
    
    public static function getPossibleValues() {
        return [
            'A+' => 7,
            'A'  => 6,
            'A-' => 5,
            'B'  => 4,
            'C'  => 3,
            'D'  => 2,
            'E'  => 1,
            'F'  => 0,
            'M'  => -1,
            'T'  => -1
        ];
    }
    
    public function compareTo(Grade $other) {
        return self::getPossibleValues()[$this->getGrade()] - self::getPossibleValues()[$other->getGrade()];
    }
    
    public function isSecure() {
        return (self::getPossibleValues()[$this->getGrade()] > 4);
    }
}
