<?php

namespace PHPExiftool\Driver\Tag\Canon;

class PeripheralLighting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'PeripheralLighting';

    protected $FullName = 'Canon::VignettingCorr';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Peripheral Lighting';

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
