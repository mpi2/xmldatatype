<?php

namespace XMLDatatype;

class GMonthDay extends ADataType
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
            $this->value = $value;
            $this->validate();
        }
    }
    
    protected function validate()
    {
        if ( ! preg_match('/^\-\-(0|1)\d\-(0|1|2|3)\d(Z|[+\-](0|1)\d:(0|3|4)(0|5))?$/', $this->value))
            throw new \XMLDatatype\Exception\UnexpectedValueException('Bad value');
        
        $m = $this->getMonth();
        $d = $this->getDay();
        switch ($m) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                if ($d > 31) {
                    throw new \XMLDatatype\Exception\OutOfBoundsException('Day out of bounds');
                }
                break;
            case 2:
                if ($d > 29) {
                    throw new \XMLDatatype\Exception\OutOfBoundsException('Day out of bounds');
                }
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                if ($d > 30) {
                    throw new \XMLDatatype\Exception\OutOfBoundsException('Day out of bounds');
                }
                break;
            default:
                throw new \XMLDatatype\Exception\OutOfBoundsException('Month out of bounds');
        }
    }

    public function toString()
    {
        return (string)$this->value;
    }
    
    public function getName()
    {
        return 'gMonthDay';
    }
    
    /**
     * Returns the month
     * @return int
     */
    public function getMonth()
    {
        return ($this->value) ? (int)substr($this->value, 2, 2) : 0;
    }
    
    /**
     * Returns the day
     * @return int
     */
    public function getDay()
    {
        return ($this->value) ? (int)substr($this->value, 5, 2) : 0;
    }
    
    /**
     * Returns the timezone
     * @return string Returns Z if timezone is UTC
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
