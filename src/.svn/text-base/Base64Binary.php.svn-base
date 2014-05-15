<?php

namespace XMLDatatype;

class Base64Binary extends ADataType
{
    public function __construct($value = null)
    {
        $this->setValue($value);
    }

    public function setValue($value)
    {
        if ($value) {
            if ( ! preg_match('/^[a-z0-9+\/\s]{4,}=*$/im', $value))
                throw new \XMLDatatype\Exception\UnexpectedValueException('Bad value');

            $this->value = $value;
        }
    }

    public function getValue()
    {
        return $this->value;
    }

    public function toString() {
        return (string)$this->value;
    }

    public function getName()
    {
        return 'base64Binary';
    }
}
