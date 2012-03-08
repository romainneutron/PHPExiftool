<?php

namespace PHPExiftool\Driver\Tag\MPEG;

class AudioBitrate extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Bit16-19';

    protected $Name = 'AudioBitrate';

    protected $FullName = 'MPEG::Audio';

    protected $GroupName = 'MPEG';

    protected $g0 = 'MPEG';

    protected $g1 = 'MPEG';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Audio Bitrate';

    protected $Index = 'mixed';

}
