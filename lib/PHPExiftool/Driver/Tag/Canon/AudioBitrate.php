<?php

namespace PHPExiftool\Driver\Tag\Canon;

class AudioBitrate extends \PHPExiftool\Driver\Tag
{

    protected $Id = 108;

    protected $Name = 'AudioBitrate';

    protected $FullName = 'Canon::MovieInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Video';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Audio Bitrate';

    protected $local_g2 = 'Audio';

    protected $flag_Permanent = true;

}
