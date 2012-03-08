<?php

namespace PHPExiftool\Driver\Tag\Canon;

class MeteringMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 17;

    protected $Name = 'MeteringMode';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Metering Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Default',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Spot',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Average',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Evaluative',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Partial',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Center-weighted average',
        ),
    );

}
