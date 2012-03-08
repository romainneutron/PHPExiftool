<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class FocusAreaSelection extends \PHPExiftool\Driver\Tag
{

    protected $Id = '15.2';

    protected $Name = 'FocusAreaSelection';

    protected $FullName = 'NikonCustom::SettingsD80';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Focus Area Selection';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No Wrap',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Wrap',
        ),
    );

}
