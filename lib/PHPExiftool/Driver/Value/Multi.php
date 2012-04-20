<?php

namespace PHPExiftool\Driver\Value;

class Multi implements Value
{

    protected $value = array();

    public function __construct($value = null)
    {
        if ($value)
        {
            $this->addValue($value);
        }
    }

    public function getType()
    {
        return self::TYPE_MULTI;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function addValue($value)
    {
        $this->value = array_merge($this->value, (array) $value);

        return $this;
    }

    public function reset()
    {
        $this->value = array();

        return $this;
    }

}
