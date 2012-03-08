<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class ZoneMatchingOn extends \PHPExiftool\Driver\Tag
{

    protected $Id = 117;

    protected $Name = 'ZoneMatchingOn';

    protected $FullName = 'Minolta::CameraSettings7D';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Zone Matching On';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
