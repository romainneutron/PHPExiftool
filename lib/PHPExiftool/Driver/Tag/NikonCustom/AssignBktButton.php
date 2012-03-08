<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class AssignBktButton extends \PHPExiftool\Driver\Tag
{

    protected $Id = '4.2';

    protected $Name = 'AssignBktButton';

    protected $FullName = 'NikonCustom::SettingsD3';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Assign Bkt Button';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto Bracketing',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Multiple Exposure',
        ),
    );

}
