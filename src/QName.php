<?php

namespace XMLDatatype;

class QName extends ADataType
{
    protected $prefix = '';
    protected $suffix = '';

    /**
     * @param string $value
     */
    public function __construct($value = null)
    {
        if ( ! is_null($value))
            $this->setValue($value);
    }

    public function getName()
    {
        return 'QName';
    }
    
    /**
     * @throws XMLDatatype\Eception\UnexpectedValueException
     * @param string $prefix
     */
    public function setPrefix($prefix)
    {
        if(strlen($prefix) == 0 || preg_match('/^[0-9]/', $prefix) || stristr($prefix, ':') !== false)
            throw new \XMLDatatype\Exception\UnexpectedValueException('Bad QName Prefix');
        $this->prefix = $prefix;
    }

    /**
     * @return string The ns part of ns:qname
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
    
    /**
     * @return string The qname part of ns:qname
     */
    public function getSuffix()
    {
        return $this->suffix;
    }
    
    /**
     * @throws XMLDatatype\Exception\UnexpectedValueException
     * @param string $suffix
     */
    public function setSuffix($suffix)
    {
        if (strlen($suffix) == 0 || preg_match('/^[0-9]/', $suffix) || stristr($suffix, ':') !== false)
            throw new \XMLDatatype\Exception\UnexpectedValueException('Bad QName');
        $this->suffix = $suffix;
    }

    /**
     * @param string $value QNames with namespaces supplied will be automatically
     * parsed so you don't need to call setPrefix()
     */
    public function setValue($value)
    {
        if (stristr($value, ':') !== false)
        {
            list($prefix, $suffix) = explode(':', $value, 2);
            $this->setPrefix($prefix);
            $this->setSuffix($suffix);
        }
        else
        {
            $this->setSuffix($value);
        }
        $this->value = $value;
    }

    public function getValue() {
        if( ! empty($this->prefix))
            return $this->prefix . ':' . $this->suffix;
        return $this->suffix;
    }
    
    public function toString()
    {
        return $this->getValue();
    }
}
