<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class SonyQuality extends \PHPExiftool\Driver\Tag
{

    protected $Id = 60;

    protected $Name = 'SonyQuality';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Sony Quality';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'RAW',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Fine',
        ),
        34 => array(
            'Id' => 34,
            'Label' => 'RAW + JPEG',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 'Standard',
        ),
    );

}
