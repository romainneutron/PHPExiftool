<?php

namespace PHPExiftool\Driver\Value;

class Binary implements Value
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

    public function getValueAsBase64()
    {
        return base64_encode($this->value);
    }

    public function setValue($value)
    {
        if ( ! is_scalar($value))
        {
            throw new \PHPExiftool\Exception\InvalidValueException('The value should be scaler');
        }

        $this->value = $value;
    }

    public static function loadFromBase64($base64)
    {
        return new static(base64_decode($base64, true));
    }

}
