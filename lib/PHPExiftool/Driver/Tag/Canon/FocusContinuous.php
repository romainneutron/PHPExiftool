<?php

namespace PHPExiftool\Driver\Tag\Canon;

class FocusContinuous extends \PHPExiftool\Driver\Tag
{

    protected $Id = 32;

    protected $Name = 'FocusContinuous';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Focus Continuous';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Single',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Continuous',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Manual',
        ),
    );

}
