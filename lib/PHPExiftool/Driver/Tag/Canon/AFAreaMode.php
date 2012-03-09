<?php

namespace PHPExiftool\Driver\Tag\Canon;

class AFAreaMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'AFAreaMode';

    protected $FullName = 'Canon::AFInfo2';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'AF Area Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off (Manual Focus)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Single-point AF',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Multi-point AF or AI AF',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Face Detect AF',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Zone AF',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'AF Point Expansion',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Spot AF',
        ),
    );

}
