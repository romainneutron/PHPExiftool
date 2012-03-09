<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class MBD10Batteries extends \PHPExiftool\Driver\Tag
{

    protected $Id = '12.6';

    protected $Name = 'MB-D10Batteries';

    protected $FullName = 'NikonCustom::SettingsD3';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'MB-D10 Batteries';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'LR6 (AA alkaline)',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'HR6 (AA Ni-MH)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'FR6 (AA lithium)',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'ZR6 (AA Ni-Mn)',
        ),
    );

}
