<?php

class GYearMonthTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new XMLDatatype\GYearMonth();
        $a->setValue('2014-01');
        $b = new XMLDatatype\GYearMonth('2014-01Z');
        $c = new XMLDatatype\GYearMonth('2014-01-01:30');
        $this->assertEquals('2014-01-01:30', $c->toString());
        $this->assertEquals(2014, $c->getYear());
        $this->assertEquals(1, $c->getMonth());
        $this->assertEquals('-01:30', $c->getTimezone());
    }
    
    public function testInvalid()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        new XMLDatatype\GYearMonth('033-04');
    }
}
