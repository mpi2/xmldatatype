<?php

namespace XMLDatatype;

class UnsignedInt extends Integer
{
    public function setValue($value)
    {
        if ($value < 0)
            throw new \XMLDatatype\Exception\OutOfBoundsException('UnsignedInt out of bounds');
        
        parent::setValue($value);
    }
    
    public function getName()
    {
        return 'unsignedInt';
    }
}
