<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class AFAreaIllumination extends \PHPExiftool\Driver\Tag
{

    protected $Id = 75;

    protected $Name = 'AFAreaIllumination';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'AF Area Illumination';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '0.3 s',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '0.6 s',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Off',
        ),
    );

}
