<?php

class GMonthDayTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new XMLDatatype\GMonthDay();
        $a->setValue('--01-01');
        $b = new XMLDatatype\GMonthDay('--02-29Z');
        $c = new XMLDatatype\GMonthDay('--12-31-01:30');
        $this->assertEquals('--12-31-01:30', $c->toString());
        $this->assertEquals(12, $c->getMonth());
        $this->assertEquals(31, $c->getDay());
        $this->assertEquals('-01:30', $c->getTimezone());
    }
    
    public function testInvalidA()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        new XMLDatatype\GMonthDay('--02-30');
    }
    
    public function testInvalidB()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        new XMLDatatype\GMonthDay('2014');
    }
}
