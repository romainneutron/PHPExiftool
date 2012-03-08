<?php

namespace PHPExiftool\Driver\Tag\QuickTime;

class CameraByteOrder extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'CameraByteOrder';

    protected $FullName = 'QuickTime::DcMD';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Camera Byte Order';

    protected $Values = array(
        'II' => array(
            'Id' => 'II',
            'Label' => 'Little-endian (Intel, II)',
        ),
        'MM' => array(
            'Id' => 'MM',
            'Label' => 'Big-endian (Motorola, MM)',
        ),
    );

}
