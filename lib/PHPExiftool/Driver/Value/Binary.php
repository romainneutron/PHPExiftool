<?php

namespace PHPExiftool\Driver\Value;

class Binary implements Value
{

    protected $value;

    public function __construct($value)
    {
        $this->setValue($value);
    }

    public function getType()
    {
        return self::TYPE_BINARY;
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
        $this->value = $value;

        return $this;
    }

    public function setBase64Value($base64Value)
    {
        if (false === $value = base64_decode($base64Value, true))
        {
            throw new \PHPExiftool\Exception\InvalidArgumentException('The value should be base64 encoded');
        }

        $this->value = $value;

        return $this;
    }

    public static function loadFromBase64($base64Value)
    {
        if (false === $value = base64_decode($base64Value, true))
        {
            throw new \PHPExiftool\Exception\InvalidArgumentException('The value should be base64 encoded');
        }

        return new static($value);
    }

}
