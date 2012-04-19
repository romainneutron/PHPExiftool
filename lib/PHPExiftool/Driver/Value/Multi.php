<?php

namespace PHPExiftool\Driver\Value;

class Multi implements Value
{

    protected $value = array();

    public function __construct(Array $value = null)
    {
        if ($value)
        {
            $this->setValue($value);
        }
    }

    public function getValue()
    {
        return $this->value;
    }

    public function addValue($value)
    {
        if ( ! is_scalar($value))
        {
            throw new \PHPExiftool\Exception\InvalidValueException('The value should be scaler');
        }

        array_push($this->value, $value);
    }

}
