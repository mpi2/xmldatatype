<?php

namespace XMLDatatype;

class String extends ADataType
{
    public function __construct($value = '')
    {
        $this->setValue($value);
    }
    
    public function setValue($value)
    {
        $this->value = (string)$value;
    }
    
    public function getValue()
    {
        return $this->value;
    }
    
    public function toString()
    {
        return $this->value;
    }
    
    public function getName()
    {
        return 'string';
    }
}
