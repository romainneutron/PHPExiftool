<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class AEMeteringMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12;

    protected $Name = 'AEMeteringMode';

    protected $FullName = 'Pentax::AEInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AE Metering Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Multi-segment',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Center-weighted average',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Spot',
        ),
    );

}
