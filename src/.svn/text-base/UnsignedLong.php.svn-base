<?php

namespace XMLDatatype;

class UnsignedLong extends Long
{
    public function setValue($value)
    {
        if ($value < 0)
            throw new \XMLDatatype\Exception\OutOfBoundsException('UnsignedLong out of bounds');
        
        parent::setValue($value);
    }
    
    public function getName()
    {
        return 'unsignedLong';
    }
}
