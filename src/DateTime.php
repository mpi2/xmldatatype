<?php

namespace XMLDatatype;

class DateTime extends ADataType
{
    /**
     * @throws XMLDatatype\Exception\UnexpectedValueException
     * @param \DateTime|string $value
     */
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
            $this->value = $value->format(\DateTime::W3C);
        } else {
            try {
                $value = new \DateTime($value);
                $this->value = $value->format(\DateTime::W3C);
            } catch (\Exception $e) {
                throw new \XMLDatatype\Exception\UnexpectedValueException($e->getMessage());
            }
        }
    }
    
    public function getValue()
    {
        return $this->value;
    }
    
    public function toString()
    {
        return $this->value;
    }

    public function getName()
    {
        return 'datetime';
    }
}
