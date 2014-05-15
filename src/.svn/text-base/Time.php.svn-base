<?php

namespace XMLDatatype;

class Time extends ADataType
{
    public function __construct($value = '00:00:00')
    {
        $this->setValue($value);
    }
    
    /**
     * @throws XMLDatatype\Exception\UnexpectedValueException
     * @throws XMLDatatype\Exception\OutOfBoundsException
     * @param string $value 
     */
    public function setValue($value)
    {
        if ( ! preg_match('/^\d\d:\d\d:\d\d(Z|[+\-]\d\d:\d\d)?$/', $value))
            throw new \XMLDatatype\Exception\UnexpectedValueException('Bad Time format');
        
        list($h, $m, $s) = explode(':', $value);
        if($h > 23 || $m > 59 || $s > 59)
            throw new \XMLDatatype\Exception\OutOfBoundsException('Bad Time value');
        
        if (preg_match('/[+\-]/', $value)) {
            $offset = substr($value, -6);
            list($oh, $om) = explode(':', substr($offset, 1));
            if ($oh > 23 || $om > 59)
                throw new \XMLDatatype\Exception\OutOfBoundsException('Bad Time Offset value');
        }
        
        $this->value = $value;
    }
    
    public function getValue()
    {
        return $this->value;
    }
    
    public function getName()
    {
        return 'time';
    }
    
    public function toString()
    {
        return (string)$this->value;
    }
    
    /**
     * Returns hour
     * @return int
     */
    public function getHour()
    {
        return (int)substr($this->value, 0, 2);
    }
    
    /**
     * Returns minutes
     * @return int
     */
    public function getMinute()
    {
        return (int)substr($this->value, 3, 2);
    }
    
    /**
     * Returns seconds
     * @return int
     */
    public function getSecond()
    {
        return (int)substr($this->value, 6, 2);
    }
    
    /**
     * Returns timezone
     * @return string Timezone or Z if UTC
     */
    public function getTimezone()
    {
        if (strlen($this->value) > 9) {
            return substr($this->value, -6);
        } else {
            return 'Z';
        }
    }
}
