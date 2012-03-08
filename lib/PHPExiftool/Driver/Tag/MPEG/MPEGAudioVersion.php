<?php

namespace PHPExiftool\Driver\Tag\MPEG;

class MPEGAudioVersion extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Bit11-12';

    protected $Name = 'MPEGAudioVersion';

    protected $FullName = 'MPEG::Audio';

    protected $GroupName = 'MPEG';

    protected $g0 = 'MPEG';

    protected $g1 = 'MPEG';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'MPEG Audio Version';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '2.5',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 2,
        ),
        3 => array(
            'Id' => 3,
            'Label' => 1,
        ),
    );

}
