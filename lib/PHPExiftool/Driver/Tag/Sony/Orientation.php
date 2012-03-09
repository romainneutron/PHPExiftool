<?php

namespace PHPExiftool\Driver\Tag\Sony;

class Orientation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 27;

    protected $Name = 'Orientation';

    protected $FullName = 'Sony::PMP';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Orientation';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Horizontal (normal)',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Rotate 270 CW',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Rotate 180',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Rotate 90 CW',
        ),
    );

}
