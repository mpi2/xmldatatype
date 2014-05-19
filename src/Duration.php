<?php

namespace XMLDatatype;

class Duration extends ADataType
{
    public function __construct($value = null)
    {
        $this->setValue($value);
    }
    
    public function getValue()
    {
        return $this->value;
    }
    
    public function getName()
    {
        return 'duration';
    }
    
    public function toString()
    {
        return (string)$this->value;
    }
    
    public function setValue($value)
    {
        if ($value) {
            $regex = '/^[+\-]?P(\d+Y)?(\d+M)?(\d+D)?T?(\d+H)?(\d+M)?(\d+(\.\d+)?S)?$/';
            if ( ! preg_match($regex, $value) || (strpos($value, 'S') !== false && false === strpos($value, 'T')))
                throw new \XMLDatatype\Exception\UnexpectedValueException('Bad Duration');
            $this->value = $value;
        }
    }
}
