<?php

namespace PHPExiftool\Driver\Tag\Sony;

class ExposureProgram extends \PHPExiftool\Driver\Tag
{

    protected $Id = 60;

    protected $Name = 'ExposureProgram';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Exposure Program';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Manual',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Program AE',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Aperture-priority AE',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Shutter speed priority AE',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Program Shift A',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Program Shift S',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Portrait',
        ),
        17 => array(
            'Id' => 17,
            'Label' => 'Sports',
        ),
        18 => array(
            'Id' => 18,
            'Label' => 'Sunset',
        ),
        19 => array(
            'Id' => 19,
            'Label' => 'Night Portrait',
        ),
        20 => array(
            'Id' => 20,
            'Label' => 'Landscape',
        ),
        21 => array(
            'Id' => 21,
            'Label' => 'Macro',
        ),
        35 => array(
            'Id' => 35,
            'Label' => 'Auto No Flash',
        ),
    );

}
