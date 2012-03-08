<?php

namespace PHPExiftool\Driver\Tag\MNG;

class Orientation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 14;

    protected $Name = 'Orientation';

    protected $FullName = 'MNG::PasteImage';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Orientation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Same as source',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Flipped left-right, then up-down',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Flipped left-right',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Flipped up-down',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Tiled',
        ),
    );

}
