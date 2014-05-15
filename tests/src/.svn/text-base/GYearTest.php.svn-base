<?php

class GYearTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new XMLDatatype\GYear();
        $a->setValue('2014');
        $b = new XMLDatatype\GYear('2014Z');
        $c = new XMLDatatype\GYear('2014-01:30');
        $this->assertEquals('2014-01:30', $c->toString());
        $this->assertEquals(2014, $c->getYear());
        $this->assertEquals('-01:30', $c->getTimezone());
    }
    
    public function testInvalid()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        new XMLDatatype\GYear('033');
    }
}
