<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class VR0x66 extends \PHPExiftool\Driver\Tag
{

    protected $Id = 102;

    protected $Name = 'VR_0x66';

    protected $FullName = 'Nikon::ShotInfo';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'VR 0x66';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On (normal)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'On (active)',
        ),
    );

}
