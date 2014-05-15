<?php

namespace XMLDatatype;

/**
 * All data types should use this abstract class.
 * If you create your own custom type or an improvement on one of mine, then 
 * please ensure it extends this class for compatibility
 */

abstract class ADataType
{
    /**
     * The data value of the type is usually held in this variable
     * @var mixed
     */
    protected $value;

    /**
     * @return mixed
     */
    abstract public function getValue();
    /**
     * @param mixed $value
     */
    abstract public function setValue($value);
    /**
     * @return string
     */
    abstract public function toString();
    /**
     * @return string
     */
    abstract public function getName();
    /**
     * @param mixed $value
     */
    abstract public function __construct($value);
    
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }
}
