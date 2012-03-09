<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class RearDisplay extends \PHPExiftool\Driver\Tag
{

    protected $Id = '12.3';

    protected $Name = 'RearDisplay';

    protected $FullName = 'NikonCustom::SettingsD3';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Rear Display';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'ISO',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Exposures Remaining',
        ),
    );

}
