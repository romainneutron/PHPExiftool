<?php

namespace PHPExiftool\Driver\Tag\Canon;

class SpotMeteringMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 39;

    protected $Name = 'SpotMeteringMode';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Spot Metering Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Center',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'AF Point',
        ),
    );

}
