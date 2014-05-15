<?php

namespace XMLDatatype;

class UnsignedByte extends Byte
{
    /**
     * @throws XMLDatatype\Exception\UnexpectedValueException
     * @param string $value
     */
    public function setValue($value)
    {
        if($value < 0)
            throw new \XMLDatatype\Exception\OutOfBoundsException('Bad Character');
        
        parent::setValue($value);
    }

    public function getName()
    {
        return 'unsignedByte';
    }
}
