<?php

use XMLDatatype\UnsignedLong,
    XMLDatatype\Exception\OutOfBoundsException;

class UnsignedLongTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        //new object without default value
        $a = new UnsignedLong();
        //check value is 0
        $this->assertEquals(0, $a->getValue());
        //set new value in range
        $a->setValue(5);
        $this->assertEquals(5, $a->getValue());
        //new object with default value set
        $b = new UnsignedLong(10);
        $this->assertEquals(10, $b->getValue());
        //get text
        $this->assertEquals("10", $b->toString());
    }
    
    public function testInvalid()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        
        $a = new UnsignedLong();
        //try setting invalid value
        $a->setValue(-10);
    }
}
