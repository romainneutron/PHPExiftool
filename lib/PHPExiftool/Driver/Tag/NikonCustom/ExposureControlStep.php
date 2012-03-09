<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class ExposureControlStep extends \PHPExiftool\Driver\Tag
{

    protected $Id = '6.1';

    protected $Name = 'ExposureControlStep';

    protected $FullName = 'NikonCustom::SettingsD7000';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Exposure Control Step';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '1/3 EV',
        ),
        64 => array(
            'Id' => 64,
            'Label' => '1/2 EV',
        ),
    );

}
