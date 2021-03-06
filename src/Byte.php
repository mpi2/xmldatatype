<?php

namespace XMLDatatype;

class Byte extends ADataType
{
    /**
     * @throws XMLDatatype\Exception\UnexpectedValueException
     * @param int|string $value
     */
    public function __construct($value = 0)
    {
        $this->setValue($value);
    }
    
    /**
     * @throws XMLDatatype\Exception\UnexpectedValueException
     * @throws XMLDatatype\Exception\OutOfBoundsException
     * @param string $value
     */
    public function setValue($value)
    {
        if(is_string($value) && (strlen($value) > 1 || chr($value) > 255))
            throw new \XMLDatatype\Exception\UnexpectedValueException('Bad Character');
        
        if (is_string($value))
            $value = ord($value);
        
        if($value < -128 || $value > 255)
            throw new \XMLDatatype\Exception\OutOfBoundsException('Bad Character');
        
        $this->value = $value;
    }
    
    public function getValue()
    {
        return $this->value;
    }
    
    public function toString()
    {
        return sprintf('%c', $this->value);
    }
    
    public function getName()
    {
        return 'byte';
    }
}
