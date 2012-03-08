<?php

namespace PHPExiftool\Driver\Tag\PNG;

class Interlace extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12;

    protected $Name = 'Interlace';

    protected $FullName = 'PNG::ImageHeader';

    protected $GroupName = 'PNG';

    protected $g0 = 'PNG';

    protected $g1 = 'PNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Interlace';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Noninterlaced',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Adam7 Interlace',
        ),
    );

}
