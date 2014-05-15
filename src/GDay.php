<?php

namespace XMLDatatype;

class GDay extends ADataType
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
            if ( ! preg_match('/^---[0123]\d(Z|[+\-][01]\d:[034][05])?$/', $value))
                throw new \XMLDatatype\Exception\UnexpectedValueException('Bad value');
            
            if (substr($value, 3, 2) > 31)
                throw new \XMLDatatype\Exception\OutOfBoundsException('Day out of bounds');
            
            $this->value = $value;
        }
    }

    public function toString()
    {
        return (string)$this->value;
    }
    
    public function getName()
    {
        return 'gDay';
    }
    
    /**
     * Returns the day
     * @return int Day or 0 if not set
     */
    public function getDay()
    {
        return ($this->value) ? (int)substr($this->value, 3, 2) : 0;
    }
    
    /**
     * Returns the timezone
     * @return string Returns Z if timezone is UTC
     */
    public function getTimezone()
    {
        if (strlen($this->value) > 6) {
            return substr($this->value, 5);
        } else {
            return 'Z';
        }
    }
}
