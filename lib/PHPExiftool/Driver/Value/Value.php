<?php

namespace PHPExiftool\Driver\Value;

interface Value
{

    const TYPE_BINARY = 'bianry';
    const TYPE_MONO   = 'mono';
    const TYPE_MULTI  = 'multi';

    public function getType();

}
