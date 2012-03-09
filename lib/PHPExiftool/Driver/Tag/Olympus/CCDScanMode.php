<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class CCDScanMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4153;

    protected $Name = 'CCDScanMode';

    protected $FullName = 'Olympus::Main';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'CCD Scan Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Interlaced',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Progressive',
        ),
    );

}
