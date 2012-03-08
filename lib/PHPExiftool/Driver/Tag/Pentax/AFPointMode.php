<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class AFPointMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 3;

    protected $Name = 'AFPointMode';

    protected $FullName = 'Pentax::CameraSettings';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AF Point Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Select',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Fixed Center',
        ),
    );

}
