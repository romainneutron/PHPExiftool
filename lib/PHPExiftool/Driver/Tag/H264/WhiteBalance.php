<?php

namespace PHPExiftool\Driver\Tag\H264;

class WhiteBalance extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'WhiteBalance';

    protected $FullName = 'mixed';

    protected $GroupName = 'H264';

    protected $g0 = 'H264';

    protected $g1 = 'H264';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = false;

    protected $Description = 'White Balance';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 32,
            'Label' => 'Hold',
        ),
        2 => array(
            'Id' => 64,
            'Label' => '1-Push',
        ),
        3 => array(
            'Id' => 96,
            'Label' => 'Daylight',
        ),
        4 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        5 => array(
            'Id' => 1,
            'Label' => 'Manual',
        ),
    );

}
