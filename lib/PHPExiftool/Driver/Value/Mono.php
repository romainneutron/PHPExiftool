<?php

namespace PHPExiftool\Driver\Value;

class Mono implements Value
{

    protected $value;

    public function __construct($value)
    {
        $this->setValue($value);
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        if ( ! is_scalar($value))
        {
            throw new \PHPExiftool\Exception\InvalidValueException('The value should be scaler');
        }

        $this->value = $value;
    }

}