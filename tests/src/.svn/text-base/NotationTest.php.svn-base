<?php

use XMLDatatype\Notation;

class NotationTest extends PHPUnit_Framework_TestCase
{
    public function testNormalA()
    {
        $a = new Notation();
        $a->setValue(1);
        $a->setNotationId(1);
        $a->setNotationPublic('public');
        $a->setNotationSystem('system');
        $a->setNotationName('notation');
        $a->addAttribute('attr1');
        $a->addAttribute('attr2', 'value');
        $this->makeAssertions($a);
    }
    
    public function testNormalB()
    {
        $a = new Notation(array(
            'id' => 1,
            'name' => 'notation',
            'value' => 1,
            'system' => 'system',
            'public' => 'public',
            'attributes' => array(
                'attr1' => null,
                'attr2' => 'value'
            )
        ));
        $this->makeAssertions($a);
    }
    
    private function makeAssertions(&$a)
    {
        $this->assertEquals(1, $a->getValue());
        $this->assertEquals(1, $a->toString());
        $this->assertEquals(1, $a->getNotationId());
        $this->assertEquals('public', $a->getNotationPublic());
        $this->assertEquals('system', $a->getNotationSystem());
        $this->assertEquals('notation', $a->getNotationName());
        $this->assertTrue($a->attributeExists('attr1'));
        $this->assertEquals('value', $a->getAttribute('attr2'));
    }
    
    public function testMissingAttribute()
    {
        $this->setExpectedException('XMLDatatype\Exception\IndexOutOfBoundsException');
        $a = new Notation();
        $a->getAttribute('key');
    }
    
    public function testAttributesExist()
    {
        $a = new Notation();
        $a->addAttribute('key1');
        $a->addAttribute('key2', 'value');
        $this->assertNotEmpty($a->getAttributes());
        $this->assertTrue($a->attributeExists('key1') && $a->attributeExists('key2'));
    }
    
    public function testRemoveAttribute()
    {
        $a = new Notation();
        $a->addAttribute('key');
        $this->assertNotEmpty($a->getAttributes());
        $a->removeAttribute('key');
        $this->assertEmpty($a->getAttributes());
    }
}
