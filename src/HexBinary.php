<?php

namespace XMLDatatype;

class HexBinary extends ADataType
{
    public function __construct($value = '')
    {
        $this->setValue($value);
    }
    
    public function setValue($value)
    {
        if (strlen($value) > 0) {
            if( ! preg_match('/^[0-9a-f]+$/i', $value) || 1 == (strlen($value) % 2))
                throw new \XMLDatatype\Exception\UnexpectedValueException('Bad HexBinary value');
            $this->value = strtolower($value);
        }
    }
    
    public function getValue()
    {
        return $this->value;
    }
    
    public function getName()
    {
        return 'hexBinary';
    }
    
    public function toString()
    {
        return (string)$this->value;
    }
}
