<?php

namespace PHPExiftool\Driver\Tag\CanonVRD;

class Rotation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 622;

    protected $Name = 'Rotation';

    protected $FullName = 'CanonVRD::Ver1';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Rotation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 0,
        ),
        1 => array(
            'Id' => 1,
            'Label' => 90,
        ),
        2 => array(
            'Id' => 2,
            'Label' => 180,
        ),
        3 => array(
            'Id' => 3,
            'Label' => 270,
        ),
    );

}
