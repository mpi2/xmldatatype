<?php

namespace XMLDatatype;

class Boolean extends ADataType
{
    public function __construct($value = false)
    {
        $this->setValue($value);
    }

    public function getValue()
    {
        return $this->value;
    }
    
    public function setValue($value)
    {
        $this->value = (bool)$value;
    }
    
    public function toString()
    {
        return ($this->getValue()) ? 'true' : 'false';
    }
    
    public function getName()
    {
        return 'boolean';
    }
}
