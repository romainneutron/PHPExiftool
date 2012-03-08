<?php

namespace PHPExiftool\Driver\Tag\Theora;

class NominalVideoBitrate extends \PHPExiftool\Driver\Tag
{

    protected $Id = 30;

    protected $Name = 'NominalVideoBitrate';

    protected $FullName = 'Theora::Identification';

    protected $GroupName = 'Theora';

    protected $g0 = 'Theora';

    protected $g1 = 'Theora';

    protected $g2 = 'Video';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Nominal Video Bitrate';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unspecified',
        ),
    );

}
