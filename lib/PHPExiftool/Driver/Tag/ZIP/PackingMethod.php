<?php

namespace PHPExiftool\Driver\Tag\ZIP;

class PackingMethod extends \PHPExiftool\Driver\Tag
{

    protected $Id = 18;

    protected $Name = 'PackingMethod';

    protected $FullName = 'ZIP::RAR';

    protected $GroupName = 'ZIP';

    protected $g0 = 'ZIP';

    protected $g1 = 'ZIP';

    protected $g2 = 'Other';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Packing Method';

    protected $Values = array(
        48 => array(
            'Id' => 48,
            'Label' => 'Stored',
        ),
        49 => array(
            'Id' => 49,
            'Label' => 'Fastest',
        ),
        50 => array(
            'Id' => 50,
            'Label' => 'Fast',
        ),
        51 => array(
            'Id' => 51,
            'Label' => 'Normal',
        ),
        52 => array(
            'Id' => 52,
            'Label' => 'Good Compression',
        ),
        53 => array(
            'Id' => 53,
            'Label' => 'Best Compression',
        ),
    );

}
