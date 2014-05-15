<?php

use XMLDatatype\DateTime;

class DateTimeTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new DateTime();
        $t = new \DateTime();
        $this->assertEquals($t->format(\DateTime::W3C), $a->getValue());
        $a->setValue(new \DateTime());
        $t = new \DateTime();
        $this->assertEquals($t->format(\DateTime::W3C), $a->getValue());
        $t = new \DateTime('2013-01-01');
        $b = new DateTime('2013-01-01');
        $this->assertEquals($t->format(\DateTime::W3C), $b->toString());
    }
    
    public function testInvalidA()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        $a = new DateTime('spanner');
    }
    
    public function testInvalidB()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        $a = new DateTime('2100-02-2000T01:00:00Z');
    }
}
