<?php

namespace PHPExiftool\Driver\Tag\Kodak;

class CameraByteOrder extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'CameraByteOrder';

    protected $FullName = 'Kodak::DcMD';

    protected $GroupName = 'Kodak';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Kodak';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Camera Byte Order';

    protected $flag_Permanent = true;

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
