<?php

namespace PHPExiftool\Driver\Tag\MPEG;

class LameBitrate extends \PHPExiftool\Driver\Tag
{

    protected $Id = 20;

    protected $Name = 'LameBitrate';

    protected $FullName = 'MPEG::Lame';

    protected $GroupName = 'MPEG';

    protected $g0 = 'MPEG';

    protected $g1 = 'MPEG';

    protected $g2 = 'Audio';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Lame Bitrate';

}
