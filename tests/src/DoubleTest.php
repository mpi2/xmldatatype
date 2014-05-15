<?php

class DoubleTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new XMLDatatype\Double(42);
        $this->assertEquals(42, $a->getValue());
    }
}
