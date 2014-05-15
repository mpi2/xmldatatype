<?php

namespace XMLDatatype;

class URI extends ADataType
{
    /**
     * @throws XMLDatatype\Exception\UnexpectedValueException
     * @param string $value
     */
    public function __construct($value = null)
    {
        $this->setValue($value);
    }
    
    /**
     * Validating RFC2396 and RFC2732 (not too strict)
     * @throws XMLDatatype\Exception\UnexpectedValueException
     * @param string $value
     */
    public function setValue($value)
    {
        if ($value) {
            if ( ! (false !== filter_var($value, FILTER_VALIDATE_URL) || 
                preg_match('/^https?:\/\/\[[0-9a-f.:]{9,}\](:\d+)?(\/.*)?$/i', $value))
            ) {
                throw new \XMLDatatype\Exception\UnexpectedValueException('Bad URI');
            }
            $this->value = $value;
        }
    }
    
    public function getValue()
    {
        return $this->value;
    }
    
    public function getName()
    {
        return 'anyURI';
    }
    
    public function toString()
    {
        return $this->value;
    }
}
