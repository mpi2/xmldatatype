<?php

use XMLDatatype\UnsignedInt,
    XMLDatatype\Exception\OutOfBoundsException;

class UnsignedIntTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        //new object without default value
        $a = new UnsignedInt();
        //check value is 0
        $this->assertEquals(0, $a->getValue());
        //set new value in range
        $a->setValue(5);
        $this->assertEquals(5, $a->getValue());
        //new object with default value set
        $b = new UnsignedInt(10);
        $this->assertEquals(10, $b->getValue());
        //get text
        $this->assertEquals("10", $b->toString());
    }
    
    public function testLowBound()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        
        $a = new UnsignedInt();
        //try setting invalid value
        $a->setValue(-10);
    }
    
    public function testHighBound()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        
        $a = new UnsignedInt();
        //try setting invalid value
        $a->setValue(1e16);
    }
}
