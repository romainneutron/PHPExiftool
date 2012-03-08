<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class MeteringMode3 extends \PHPExiftool\Driver\Tag
{

    protected $Id = '16.1';

    protected $Name = 'MeteringMode3';

    protected $FullName = 'Pentax::CameraSettings';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Metering Mode 3';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Multi-segment',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Center-weighted average',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Spot',
        ),
    );

}
