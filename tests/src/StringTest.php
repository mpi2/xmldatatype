<?php

use XMLDatatype\String;

class StringTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new String();
        $this->assertEquals('', $a->getValue());
        $a->setValue('testing');
        $this->assertEquals('testing', $a->getValue());
        $b = new String('testing');
        $this->assertEquals('testing', $b->getValue());
        $this->assertEquals('testing', $b->toString());
    }
}
