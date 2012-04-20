<?php

namespace PHPExiftool\Driver\Value;

class Mono implements Value
{

    protected $value;

    public function __construct($value)
    {
        $this->setValue($value);
    }

    public function getType()
    {
        return self::TYPE_MONO;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

}