<?php

use XMLDatatype\Boolean;

class BooleanTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new Boolean();
        $this->assertFalse($a->getValue());
        $a->setValue(1);
        $this->assertTrue($a->getValue());
        $this->assertEquals('true', $a->toString());
    }
}
