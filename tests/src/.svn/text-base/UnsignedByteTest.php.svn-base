<?php

use XMLDatatype\UnsignedByte,
    XMLDatatype\Exception\OutOfBoundsException;

class UnsignedByteTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new UnsignedByte();
        $this->assertEquals(0, $a->getValue());
        //set value within bounds
        $a->setValue(97); //a
        $this->assertEquals(97, $a->getValue());
        //new object with default value set
        $b = new UnsignedByte(98); //b
        $this->assertEquals(98, $b->getValue());
        //get text
        $this->assertEquals('b', $b->toString());
    }
    
    public function testLowBound()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        
        $a = new UnsignedByte();
        $a->setValue(-1);
    }
    
    public function testHighBound()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        
        $a = new UnsignedByte();
        $a->setValue(256);
    }
    
    public function testChar()
    {
        $a = new UnsignedByte('a');
        $this->assertEquals(97, $a->getValue());
        $this->assertEquals('a', $a->toString());
    }
}
