<?php

namespace XMLDatatype;

class GYear extends ADataType
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
            if ( ! preg_match('/^\-?\d{4,}(Z|[+\-](0|1)\d:(0|3|4)(0|5))?$/', $value))
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
        return 'gYear';
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
     * Returns timezone
     * @return string Timezone or Z if UTC
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
