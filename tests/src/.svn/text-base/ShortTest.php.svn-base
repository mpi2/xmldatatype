<?php

use XMLDatatype\Short,
    XMLDatatype\Exception\OutOfBoundsException;

class ShortTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        //new object without default value
        $a = new Short();
        //check value is 0
        $this->assertEquals(0, $a->getValue());
        //set new value in range
        $a->setValue(5);
        $this->assertEquals(5, $a->getValue());
        //new object with default value set
        $b = new Short(10);
        $this->assertEquals(10, $b->getValue());
        //get text
        $this->assertEquals("10", $b->toString());
    }
    
    public function testLowBound()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        
        $a = new Short();
        //try setting invalid value
        $a->setValue(-1e6);
    }
    
    public function testHighBound()
    {
        $this->setExpectedException('XMLDatatype\Exception\OutOfBoundsException');
        
        $a = new Short();
        //try setting invalid value
        $a->setValue(1e6);
    }
    
}
