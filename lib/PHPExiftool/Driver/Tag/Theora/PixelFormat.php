<?php

namespace PHPExiftool\Driver\Tag\Theora;

class PixelFormat extends \PHPExiftool\Driver\Tag
{

    protected $Id = 34;

    protected $Name = 'PixelFormat';

    protected $FullName = 'Theora::Identification';

    protected $GroupName = 'Theora';

    protected $g0 = 'Theora';

    protected $g1 = 'Theora';

    protected $g2 = 'Video';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Pixel Format';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '4:2:0',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '4:2:2',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '4:4:4',
        ),
    );

}
