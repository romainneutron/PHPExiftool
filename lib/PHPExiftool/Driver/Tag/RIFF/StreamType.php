<?php

namespace PHPExiftool\Driver\Tag\RIFF;

class StreamType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'StreamType';

    protected $FullName = 'RIFF::StreamHeader';

    protected $GroupName = 'RIFF';

    protected $g0 = 'RIFF';

    protected $g1 = 'RIFF';

    protected $g2 = 'Video';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Stream Type';

    protected $Values = array(
        'auds' => array(
            'Id' => 'auds',
            'Label' => 'Audio',
        ),
        'mids' => array(
            'Id' => 'mids',
            'Label' => 'MIDI',
        ),
        'txts' => array(
            'Id' => 'txts',
            'Label' => 'Text',
        ),
        'vids' => array(
            'Id' => 'vids',
            'Label' => 'Video',
        ),
    );

}
