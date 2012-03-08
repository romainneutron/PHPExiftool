<?php

namespace PHPExiftool\Driver\Tag\PSP;

class Compression extends \PHPExiftool\Driver\Tag
{

    protected $Id = 17;

    protected $Name = 'Compression';

    protected $FullName = 'PSP::Image';

    protected $GroupName = 'PSP';

    protected $g0 = 'PSP';

    protected $g1 = 'PSP';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Compression';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'RLE',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'LZ77',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'JPEG',
        ),
    );

}
