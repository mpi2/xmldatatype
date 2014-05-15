<?php

use XMLDatatype\Duration;

class DurationTest extends PHPUnit_Framework_TestCase
{
    public function testNormal()
    {
        $a = new Duration();
        $a->setValue('P2Y2M0DT15H3M59S');
        $this->assertEquals('P2Y2M0DT15H3M59S', $a->getValue());
        $this->assertEquals('P2Y2M0DT15H3M59S', $a->toString());
        $b = new Duration('P2Y2M');
        $this->assertEquals('P2Y2M', $b->getValue());
    }
    
    public function testInvalidA()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        $a = new Duration();
        $a->setValue('spanner');
    }
    
    public function testMissingT()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        $a = new Duration();
        $a->setValue('P2Y2M0D15H3M59S');
    }
    
    public function testMissingS()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        $a = new Duration();
        $a->setValue('P2Y2M0DT15H3M59');
    }
    
    public function testMissingTandS()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        $a = new Duration();
        $a->setValue('P2Y2M0D15H3M59');
    }
    
    public function testMilliSeconds()
    {
        $a = new Duration();
        $a->setValue('P2Y2M0DT15H3M59.12S');
        $this->assertEquals('P2Y2M0DT15H3M59.12S', $a->getValue());
    }
}
