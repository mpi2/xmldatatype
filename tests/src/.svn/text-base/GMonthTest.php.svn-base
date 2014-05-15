<?php

class GMonthTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new XMLDatatype\GMonth();
        $a->setValue('--01');
        $b = new XMLDatatype\GMonth('--02Z');
        $c = new XMLDatatype\GMonth('--12-01:30');
        $this->assertEquals('--12-01:30', $c->toString());
        $this->assertEquals(12, $c->getMonth());
        $this->assertEquals('-01:30', $c->getTimezone());
    }
    
    public function testInvalidA()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        new XMLDatatype\GMonth('--2');
    }
    
    public function testInvalidB()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        new XMLDatatype\GMonth('--13');
    }
}
