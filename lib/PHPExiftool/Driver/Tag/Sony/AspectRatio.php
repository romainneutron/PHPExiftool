<?php

namespace PHPExiftool\Driver\Tag\Sony;

class AspectRatio extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'AspectRatio';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Aspect Ratio';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 1,
            'Label' => '3:2',
        ),
        1 => array(
            'Id' => 2,
            'Label' => '16:9',
        ),
        2 => array(
            'Id' => 4,
            'Label' => '3:2',
        ),
        3 => array(
            'Id' => 8,
            'Label' => '16:9',
        ),
    );

}
