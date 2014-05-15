<?php

namespace XMLDatatype;

class GMonth extends ADataType
{
    public function __construct($value = null)
    {
        $this->setValue($value);
    }
    
    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        if (strlen($value) > 0) {
            if ( ! preg_match('/^--[01]\d(Z|[+\-][01]\d:[034][05])?$/', $value))
                throw new \XMLDatatype\Exception\UnexpectedValueException('Bad value');
            
            if (substr($value, 2, 2) > 12)
                throw new \XMLDatatype\Exception\OutOfBoundsException('Month out of bounds');
            
            $this->value = $value;
        }
    }

    public function toString()
    {
        return (string)$this->value;
    }
    
    public function getName()
    {
        return 'gMonth';
    }
    
    /**
     * Returns the month
     * @return int month or 0 if not set
     */
    public function getMonth()
    {
        return ($this->value) ? (int)substr($this->value, 2, 2) : 0;
    }
    
    /**
     * Returns the timezone
     * @return string Returns Z if timezone is UTC
     */
    public function getTimezone()
    {
        if (strlen($this->value) > 5) {
            return substr($this->value, 4);
        } else {
            return 'Z';
        }
    }
}
