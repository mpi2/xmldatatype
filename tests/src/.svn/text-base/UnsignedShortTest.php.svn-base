<?php

use XMLDatatype\UnsignedShort,
    XMLDatatype\Exception\OutOfBoundsException;

class UnsignedShortTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        //new object without default value
        $a = new UnsignedShort();
        //check value is 0
        $this->assertEquals(0, $a->getValue());
        //set new value in range
        $a->setValue(5);
        $this->assertEquals(5, $a->getValue());
        //new object with default value set
        $b = new UnsignedShort(10);
        $this->assertEquals(10, $b->getValue());
        //get text
        $this->assertEquals("10", $b->toString());
    }
    
    public function testLowBound()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        
        $a = new UnsignedShort();
        //try setting invalid value
        $a->setValue(-10);
    }
    
    public function testHighBound()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        
        $a = new UnsignedShort();
        //try setting invalid value
        $a->setValue(1e6);
    }
    
}
