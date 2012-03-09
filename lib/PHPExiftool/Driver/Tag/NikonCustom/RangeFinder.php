<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class RangeFinder extends \PHPExiftool\Driver\Tag
{

    protected $Id = '4.1';

    protected $Name = 'RangeFinder';

    protected $FullName = 'NikonCustom::SettingsD5000';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Range Finder';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'On',
        ),
    );

}
