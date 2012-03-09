<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class AFPointBrightness extends \PHPExiftool\Driver\Tag
{

    protected $Id = '2.4';

    protected $Name = 'AFPointBrightness';

    protected $FullName = 'NikonCustom::SettingsD3';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AF Point Brightness';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Low',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Normal',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'High',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Extra High',
        ),
    );

}
