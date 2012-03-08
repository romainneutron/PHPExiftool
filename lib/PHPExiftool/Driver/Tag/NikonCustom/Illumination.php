<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class Illumination extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0.5';

    protected $Name = 'Illumination';

    protected $FullName = 'NikonCustom::SettingsD80';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Illumination';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'On',
        ),
    );

}
