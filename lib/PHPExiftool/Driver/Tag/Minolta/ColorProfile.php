<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class ColorProfile extends \PHPExiftool\Driver\Tag
{

    protected $Id = 51;

    protected $Name = 'ColorProfile';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Color Profile';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not Embedded',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Embedded',
        ),
    );

}