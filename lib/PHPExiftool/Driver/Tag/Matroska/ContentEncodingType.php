<?php

namespace PHPExiftool\Driver\Tag\Matroska;

class ContentEncodingType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4147;

    protected $Name = 'ContentEncodingType';

    protected $FullName = 'Matroska::Main';

    protected $GroupName = 'Matroska';

    protected $g0 = 'Matroska';

    protected $g1 = 'Matroska';

    protected $g2 = 'Video';

    protected $Type = 'unsigned';

    protected $Writable = false;

    protected $Description = 'Content Encoding Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Compression',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Encryption',
        ),
    );

}
