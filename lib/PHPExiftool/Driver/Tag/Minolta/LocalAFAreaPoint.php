<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class LocalAFAreaPoint extends \PHPExiftool\Driver\Tag
{

    protected $Id = 13;

    protected $Name = 'LocalAFAreaPoint';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Local AF Area Point';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Center',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Top',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Top-Right',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Right',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Bottom-Right',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Bottom',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Bottom-Left',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Left',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Top-Left',
        ),
    );

}
