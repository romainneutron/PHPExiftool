<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class DigitalZoom extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12;

    protected $Name = 'DigitalZoom';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Digital Zoom';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Electronic magnification',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '2x',
        ),
    );

}
