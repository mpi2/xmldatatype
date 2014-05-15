<?php

use XMLDatatype\Byte,
    XMLDatatype\Exception\OutOfBoundsException;

class ByteTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new Byte();
        $this->assertEquals(0, $a->getValue());
        //set value within bounds
        $a->setValue(97); //a
        $this->assertEquals(97, $a->getValue());
        //new object with default value set
        $b = new Byte(98); //b
        $this->assertEquals(98, $b->getValue());
        //get text
        $this->assertEquals('b', $b->toString());
    }
    
    public function testChar()
    {
        $a = new Byte('a');
        $this->assertEquals(97, $a->getValue());
        $this->assertEquals('a', $a->toString());
    }
    
    public function testLowBound()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        $a = new Byte(-256);
    }
    
    public function testHighBound()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        $a = new Byte(256);
    }
        
    public function testInvalid()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        $a = new Byte('spanner');
    }
}
