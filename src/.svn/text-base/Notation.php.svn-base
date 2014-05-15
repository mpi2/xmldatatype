<?php

namespace XMLDatatype;

class Notation extends ADataType
{
    protected $notationId = null;
    protected $notationName = null;
    protected $notationPublic = null;
    protected $notationSystem = null;
    protected $attributes = array();

    /**
     * @param array|string $value The value of the annotation (a QName) or an
     * array with these keys: id, name, public, system, value, attributes
     */
    public function __construct($value = '')
    {
        if (is_array($value))
        {
            if(isset($value['id']))
                $this->setNotationId($value['id']);
            if(isset($value['name']))
                $this->setNotationName($value['name']);
            if(isset($value['public']))
                $this->setNotationPublic($value['public']);
            if(isset($value['system']))
                $this->setNotationSystem($value['system']);
            if(isset($value['value']))
                $this->setValue($value['value']);
            if(isset($value['attributes']))
                $this->addAttribute($value['attributes']);
        }
        else
        {
            $this->setValue($value);
        }
    }
    
    public function setNotationId($id)
    {
        $this->notationId = $id;
    }

    public function getNotationId()
    {
        return $this->notationId;
    }

    /**
     * @param QName|mixed $value
     */
    public function setValue($value)
    {
        $this->value = (string)$value;
    }
    
    public function getValue()
    {
        return $this->value;
    }
    
    public function getName()
    {
        return 'notation';
    }
    
    public function toString()
    {
        return (string)$this->value;
    }
    
    public function getNotationName()
    {
        return $this->notationName;
    }
    
    public function getNotationPublic()
    {
        return $this->notationPublic;
    }
    
    /**
     * @throws XMLDatatype\Exception\UnexpectedValueException
     * @param URI|mixed $value 
     */
    public function setNotationPublic($value)
    {
        $this->notationPublic = $value;
    }
    
    public function getNotationSystem()
    {
        return $this->notationSystem;
    }
    
    /**
     * @throws XMLDatatype\Exception\UnexpectedValueException
     * @param URI|mixed $value 
     */
    public function setNotationSystem($value)
    {
        $this->notationSystem = $value;
    }
    
    public function setNotationName($name)
    {
        $this->notationName = $name;
    }
    
    /**
     * @param string|array $key
     * @param mixed $value
     */
    public function addAttribute($key, $value = null)
    {
        if (is_array($key)) {
            foreach ($key as $k => $v)
                $this->addAttribute($k, $v);
        } else {
            $this->attributes[$key] = (is_null($value)) ? '' : $value;
        }
    }
    
    /**
     * @return array
     */
    public function getAttributes()
    {
        return (array)$this->attributes;
    }
    
    /**
     * @throws XMLDatatype\Exception\IndexOutOfBoundsException
     * @param mixed $key
     * @return mixed
     */
    public function getAttribute($key)
    {
        if ( ! isset($this->attributes[$key]))
            throw new \XMLDatatype\Exception\IndexOutOfBoundsException('Attribute not found');
        return $this->attributes[$key];
    }

    public function removeAttribute($key)
    {
        unset($this->attributes[$key]);
    }
    
    /**
     * @param mixed $key
     * @return bool
     */
    public function attributeExists($key)
    {
        return isset($this->attributes[$key]);
    }
}
