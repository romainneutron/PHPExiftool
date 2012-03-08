<?php

namespace PHPExiftool\Driver\Tag\Matroska;

class ContentCompressionAlgorithm extends \PHPExiftool\Driver\Tag
{

    protected $Id = 596;

    protected $Name = 'ContentCompressionAlgorithm';

    protected $FullName = 'Matroska::Main';

    protected $GroupName = 'Matroska';

    protected $g0 = 'Matroska';

    protected $g1 = 'Matroska';

    protected $g2 = 'Video';

    protected $Type = 'unsigned';

    protected $Writable = false;

    protected $Description = 'Content Compression Algorithm';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'zlib',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'bzlib',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'lzo1x',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Header Stripping',
        ),
    );

}
