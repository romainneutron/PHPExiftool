<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class LiveViewAFMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = '34.2';

    protected $Name = 'LiveViewAFMode';

    protected $FullName = 'NikonCustom::SettingsD7000';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Live View AF Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'AF-C',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'AF-F',
        ),
    );

}
