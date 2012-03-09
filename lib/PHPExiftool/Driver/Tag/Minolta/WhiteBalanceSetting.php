<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class WhiteBalanceSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 35;

    protected $Name = 'WhiteBalanceSetting';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'White Balance Setting';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Preset',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Custom',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Color Temperature/Color Filter',
        ),
        32769 => array(
            'Id' => 32769,
            'Label' => 'Preset',
        ),
        32770 => array(
            'Id' => 32770,
            'Label' => 'Custom',
        ),
        32771 => array(
            'Id' => 32771,
            'Label' => 'Color Temperature/Color Filter',
        ),
    );

}
