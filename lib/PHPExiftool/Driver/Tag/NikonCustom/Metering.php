<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class Metering extends \PHPExiftool\Driver\Tag
{

    protected $Id = '6.1';

    protected $Name = 'Metering';

    protected $FullName = 'NikonCustom::SettingsD40';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Metering';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Matrix',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Center-weighted',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Spot',
        ),
    );

}
