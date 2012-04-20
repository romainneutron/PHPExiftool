<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

    public function __toString()
    {
        return $this->getValue();
    }

}