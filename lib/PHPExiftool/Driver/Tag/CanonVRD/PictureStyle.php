<?php

namespace PHPExiftool\Driver\Tag\CanonVRD;

class PictureStyle extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'PictureStyle';

    protected $FullName = 'CanonVRD::Ver2';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Picture Style';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Standard',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Portrait',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Landscape',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Neutral',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Faithful',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Monochrome',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Unknown?',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Custom',
        ),
    );

}
