<?php

class GDayTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new XMLDatatype\GDay();
        $a->setValue('---01');
        $b = new XMLDatatype\GDay('---02Z');
        $c = new XMLDatatype\GDay('---31-01:30');
        $this->assertEquals('---31-01:30', $c->toString());
        $this->assertEquals(31, $c->getDay());
        $this->assertEquals('-01:30', $c->getTimezone());
    }
    
    public function testInvalidA()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        new XMLDatatype\GDay('---2');
    }
    
    public function testInvalidB()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        new XMLDatatype\GDay('---32');
    }
}
