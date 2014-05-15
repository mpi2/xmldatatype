<?php

namespace XMLDatatype;

class Short extends Integer
{
    public function getName()
    {
        return 'short';
    }
    
    /**
     * @throws XMLDatatype\Exception\OutOfBoundsException
     * @param int $value 
     */
    public function setValue($value)
    {
        if($value < -32768 || $value > 32767)
            throw new \XMLDatatype\Exception\OutOfBoundsException('Short out of bounds');

        parent::setValue($value);
    }
}
