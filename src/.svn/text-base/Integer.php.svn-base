<?php

namespace XMLDatatype;

class Integer extends ADataType
{
    /**
     * @throws XMLDatatype\Exception\OutOfBoundsException
     * @param int $value
     */
    public function __construct($value = 0)
    {
        $this->setValue($value);
    }

    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * @throws XMLDatatype\Exception\OutOfBoundsException
     * @throws XMLDatatype\Exception\UnexpectedValueException
     * @param int $value
     */
    public function setValue($value)
    {
        if ( ! is_numeric($value))
            throw new \XMLDatatype\Exception\UnexpectedValueException('Non-numeric value');
        
        if($value > PHP_INT_MAX || $value < ~PHP_INT_MAX)
            throw new \XMLDatatype\Exception\OutOfBoundsException('Value out of bounds');
        
        $this->value = (int)$value;
    }
    
    public function toString()
    {
        return (string)$this->getValue();
    }
    
    public function getName()
    {
        return 'integer';
    }
}
