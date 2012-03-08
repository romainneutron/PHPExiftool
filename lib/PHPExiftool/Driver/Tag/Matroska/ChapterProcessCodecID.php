<?php

namespace PHPExiftool\Driver\Tag\Matroska;

class ChapterProcessCodecID extends \PHPExiftool\Driver\Tag
{

    protected $Id = 10581;

    protected $Name = 'ChapterProcessCodecID';

    protected $FullName = 'Matroska::Main';

    protected $GroupName = 'Matroska';

    protected $g0 = 'Matroska';

    protected $g1 = 'Matroska';

    protected $g2 = 'Video';

    protected $Type = 'unsigned';

    protected $Writable = false;

    protected $Description = 'Chapter Process Codec ID';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Matroska',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'DVD',
        ),
    );

}
