<?php

use XMLDatatype\Time,
    XMLDatatype\Exception\OutOfBoundsException,
    XMLDatatype\Exception\UnexpectedValueException;

class TimeTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new Time('12:00:00');
        $this->assertEquals('12:00:00', $a->getValue());
        $a->setValue('14:00:00');
        $this->assertEquals('14:00:00', $a->getValue());
        $this->assertEquals('14:00:00', $a->toString());
        $b = new Time('12:00:00+01:30');
        $this->assertEquals('12:00:00+01:30', $b->getValue());
        $c = new Time('13:01:02-01:30');
        $this->assertEquals(13, $c->getHour());
        $this->assertEquals(1, $c->getMinute());
        $this->assertEquals(2, $c->getSecond());
        $this->assertEquals('-01:30', $c->getTimezone());
    }
    
    public function testHourBounds()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        $a = new Time('24:00:00');
    }
    
    public function testMinBounds()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        $a = new Time('23:60:00');
    }
    
    public function testSecBounds()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        $a = new Time('23:00:60');
    }
    
    public function testOffsetHourBounds()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        $a = new Time('23:00:00+24:00');
    }
    
    public function testOffsetMinBounds()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        $a = new Time('23:00:00+23:60');
    }


    public function testInvalidA()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        $a = new Time('-01:00:56');
    }
    
    public function testInvalidB()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        $a = new Time('01:00:56Z01:00');
    }
}
