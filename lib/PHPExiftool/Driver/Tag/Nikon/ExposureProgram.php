<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class ExposureProgram extends \PHPExiftool\Driver\Tag
{

    protected $Id = 17860642;

    protected $Name = 'ExposureProgram';

    protected $FullName = 'Nikon::NCTG';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Exposure Program';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not Defined',
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
        5 => array(
            'Id' => 5,
            'Label' => 'Creative (Slow speed)',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Action (High speed)',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Portrait',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Landscape',
        ),
    );

}
