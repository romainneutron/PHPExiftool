<?php

namespace PHPExiftool\Driver\Tag\QuickTime;

class VideoAttributes extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4;

    protected $Name = 'VideoAttributes';

    protected $FullName = 'QuickTime::VideoProf';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Video';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Video Attributes';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Encrypted',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Variable bitrate',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Variable frame rate',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Interlaced',
        ),
    );

}
