<?php

namespace XMLDatatype;

class Date extends ADataType
{
    public function __construct($value = '')
    {
        $this->setValue($value);
    }
    
    /**
     * @throws XMLDatatype\Exception\UnexpectedValueException
     * @param \DateTime|string $value
     */
    public function setValue($value = '')
    {
        if ($value instanceof \DateTime) {
            $d = $value;
        } else {
            try {
                $d = new \DateTime($value);
            } catch (\Exception $e) {
                throw new \XMLDatatype\Exception\UnexpectedValueException($e->getMessage());
            }
        }
        $p = ($d->format('P') == '+00:00') ? '' : $d->format('P');
        $this->value = $d->format('Y-m-d') . $p;
    }
    
    public function getValue()
    {
        return $this->value;
    }
    
    public function getName()
    {
        return 'date';
    }
    
    public function toString()
    {
        return $this->value;
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
     * Returns day
     * @return int Day or 0 if not set
     */
    public function getDay()
    {
        return ($this->value) ? (int)substr($this->value, 8, 2) : 0;
    }
    
    /**
     * Returns timezone
     * @return string Timezone or Z if UTC
     */
    public function getTimezone()
    {
        if (strlen($this->value) > 11) {
            return substr($this->value, -6);
        } else {
            return 'Z';
        }
    }
}
