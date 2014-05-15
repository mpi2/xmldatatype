<?php

use XMLDatatype\Float,
    XMLDatatype\Exception\UnexpectedValueException;

class FloatTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new Float();
        $this->assertEquals(0, $a->getValue());
        $a->setValue(42.6);
        $this->assertEquals(42.6, $a->getValue());
        $this->assertEquals('42.6', $a->toString());
    }
    
    public function testInvalid()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        $a = new Float('spanner');
    }
}
