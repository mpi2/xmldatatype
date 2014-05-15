<?php

use XMLDatatype\Integer,
    XMLDatatype\Exception\OutOfBoundsException,
    XMLDatatype\Exception\UnexpectedValueException;

class IntegerTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new Integer();
        $this->assertEquals(0, $a->getValue());
        $a->setValue(5);
        $this->assertEquals(5, $a->getValue());
        $b = new Integer(-9);
        $this->assertEquals(-9, $b->getValue());
        $this->assertEquals('-9', $b->toString());
    }
    
    public function testLowBound()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        $a = new Integer(~PHP_INT_MAX - 1);
    }
    
    public function testHighBound()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        $a = new Integer(PHP_INT_MAX + 1);
    }
    
    public function testFloat()
    {
        $a = new Integer(5.8);
        $this->assertEquals(5, $a->getValue());
    }
    
    public function testInvalid()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        $a = new Integer('spanner');
    }
}
