<?php

namespace PHPExiftool\Driver\Tag\DjVu;

class Orientation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 9;

    protected $Name = 'Orientation';

    protected $FullName = 'DjVu::Info';

    protected $GroupName = 'DjVu';

    protected $g0 = 'DjVu';

    protected $g1 = 'DjVu';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Orientation';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Horizontal (normal)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Rotate 180',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Rotate 90 CW',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Rotate 270 CW',
        ),
    );

}
