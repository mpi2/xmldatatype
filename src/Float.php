<?php

namespace XMLDatatype;

class Float extends ADataType
{
    public function __construct($value = 0)
    {
        $this->setValue($value);
    }

    public function getValue()
    {
        return $this->value;
    }
    
    public function setValue($value)
    {
        if ( ! is_numeric($value))
            throw new \XMLDatatype\Exception\UnexpectedValueException('Bad float');
        
        $this->value = (float)$value;
    }
    
    public function toString()
    {
        return (string)$this->getValue();
    }
    
    public function getName()
    {
        return 'float';
    }
}
