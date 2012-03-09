<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class ApertureRingUse extends \PHPExiftool\Driver\Tag
{

    protected $Id = '1.4';

    protected $Name = 'ApertureRingUse';

    protected $FullName = 'Pentax::CameraSettings';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Aperture Ring Use';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Prohibited',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Permitted',
        ),
    );

}
