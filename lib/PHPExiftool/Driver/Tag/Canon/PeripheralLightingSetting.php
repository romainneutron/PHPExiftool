<?php

namespace PHPExiftool\Driver\Tag\Canon;

class PeripheralLightingSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 5;

    protected $Name = 'PeripheralLightingSetting';

    protected $FullName = 'Canon::VignettingCorr2';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Peripheral Lighting Setting';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
