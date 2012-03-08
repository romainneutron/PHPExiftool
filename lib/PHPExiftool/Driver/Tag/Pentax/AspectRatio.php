<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class AspectRatio extends \PHPExiftool\Driver\Tag
{

    protected $Id = 128;

    protected $Name = 'AspectRatio';

    protected $FullName = 'Pentax::Main';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = true;

    protected $Description = 'Aspect Ratio';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '4:3',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '3:2',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '16:9',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '1:1',
        ),
    );

}
