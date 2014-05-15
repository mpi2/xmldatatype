<?php

use XMLDatatype\QName,
    XMLDatatype\Exception\UnexpectedValueException;

class QNameTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new QName('suffix');
        $this->assertEquals('suffix', $a->getSuffix());
        $a->setPrefix('prefix');
        $this->assertEquals('prefix', $a->getPrefix());
        $this->assertEquals('prefix:suffix', $a->getValue());
        $this->assertEquals('prefix:suffix', $a->toString());
        $b = new QName('prefix:suffix');
        $this->assertEquals('prefix', $b->getPrefix());
        $this->assertEquals('suffix', $b->getSuffix());
        $this->assertEquals('prefix:suffix', $b->getValue());
        $this->assertEquals('prefix:suffix', $b->toString());
    }
    
    public function testInvalidA()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        new QName('prefix:9suffix');
    }
    
    public function testInvalidB()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        new QName(':suffix');
    }
    
    public function testInvalidC()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        new QName('prefix:');
    }
    
    public function testInvalidD()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        new QName(':prefixorsuffix:');
    }
}
