<?php

namespace PHPExiftool\Driver\Tag\Casio;

class UnknownMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12315;

    protected $Name = 'UnknownMode';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Unknown Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Silent Movie',
        ),
        39 => array(
            'Id' => 39,
            'Label' => 'HDR',
        ),
        45 => array(
            'Id' => 45,
            'Label' => 'Premium Auto',
        ),
        47 => array(
            'Id' => 47,
            'Label' => 'Painting',
        ),
        49 => array(
            'Id' => 49,
            'Label' => 'Crayon Drawing',
        ),
        51 => array(
            'Id' => 51,
            'Label' => 'Panorama',
        ),
        52 => array(
            'Id' => 52,
            'Label' => 'Art HDR',
        ),
    );

}
