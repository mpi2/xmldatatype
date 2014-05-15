<?php

namespace XMLDatatype;

class UnsignedShort extends Integer
{
    /**
     * @throws XMLDatatype\Exception\OutOfBoundsException
     * @param int $value
     */
    public function setValue($value)
    {
        if($value < 0 || $value > 65535)
            throw new \XMLDatatype\Exception\OutOfBoundsException('UnsignedShort out of bounds');

        parent::setValue($value);
    }
    
    public function getName()
    {
        return 'unsignedShort';
    }
}
