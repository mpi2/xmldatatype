<?php

namespace XMLDatatype;

class GYearMonth extends ADataType
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
            if ( ! preg_match('/^\-?\d{4,}\-(0|1|2|3)\d(Z|[+\-](0|1)\d:(0|3|4)(0|5))?$/', $value))
                throw new \XMLDatatype\Exception\UnexpectedValueException('Bad value');

            $this->value = $value;
        }
    }
    
    public function toString()
    {
        return (string)$this->value;
    }
    
    public function getName()
    {
        return 'gYearMonth';
    }
    
    /**
     * Returns year
     * @return int Year or 0 if not set
     */
    public function getYear()
    {
        return ($this->value) ? (int)substr($this->value, 0, 4) : 0;
    }
    
    /**
     * Returns month
     * @return int Month or 0 if not set
     */
    public function getMonth()
    {
        return ($this->value) ? (int)substr($this->value, 5, 2) : 0;
    }
    
    /**
     * Returns timezone
     * @return string Timezone or Z if UTC
     */
    public function getTimezone()
    {
        if (strlen($this->value) > 8) {
            return substr($this->value, -6);
        } else {
            return 'Z';
        }
    }
}
