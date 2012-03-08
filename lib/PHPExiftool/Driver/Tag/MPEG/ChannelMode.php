<?php

namespace PHPExiftool\Driver\Tag\MPEG;

class ChannelMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Bit24-25';

    protected $Name = 'ChannelMode';

    protected $FullName = 'MPEG::Audio';

    protected $GroupName = 'MPEG';

    protected $g0 = 'MPEG';

    protected $g1 = 'MPEG';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Channel Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Stereo',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Joint Stereo',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Dual Channel',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Single Channel',
        ),
    );

}
