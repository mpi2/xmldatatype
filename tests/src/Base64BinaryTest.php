<?php

class Base64BinaryTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new XMLDatatype\Base64Binary();
        $a->setValue('ABCD');
        new XMLDatatype\Base64Binary('ABcD===');
        $c = new XMLDatatype\Base64Binary('0F+40A===');
        $this->assertEquals('0F+40A===', $c->getValue());
    }
    
    public function testInvalid()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        new XMLDatatype\Base64Binary('123');
    }
}
