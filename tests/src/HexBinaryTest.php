<?php

use XMLDatatype\HexBinary,
    XMLDatatype\Exception\UnexpectedValueException;

class HexBinaryTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new HexBinary(bin2hex(1));
        $this->assertEquals(bin2hex(1), $a->getValue());
        $a->setValue(bin2hex('ab'));
        $this->assertEquals(bin2hex('ab'), $a->getValue());
        $this->assertEquals(bin2hex('ab'), $a->toString());
        $b = new HexBinary();
    }
    
    public function testInvalidA()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        $a = new HexBinary('abc');
    }
    
    public function testInvalidB()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        $a = new HexBinary('0a6g');
    }
}
