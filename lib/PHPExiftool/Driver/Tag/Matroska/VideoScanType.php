<?php

namespace PHPExiftool\Driver\Tag\Matroska;

class VideoScanType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 26;

    protected $Name = 'VideoScanType';

    protected $FullName = 'Matroska::Main';

    protected $GroupName = 'Matroska';

    protected $g0 = 'Matroska';

    protected $g1 = 'Matroska';

    protected $g2 = 'Video';

    protected $Type = 'unsigned';

    protected $Writable = false;

    protected $Description = 'Video Scan Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Progressive',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Interlaced',
        ),
    );

}
