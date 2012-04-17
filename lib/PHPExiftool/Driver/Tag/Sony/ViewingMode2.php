<?php

namespace PHPExiftool\Driver\Tag\Sony;

class ViewingMode2 extends \PHPExiftool\Driver\Tag
{

    protected $Id = 133;

    protected $Name = 'ViewingMode2';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Viewing Mode 2';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'n/a',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Viewfinder',
        ),
        33 => array(
            'Id' => 33,
            'Label' => 'Focus Check Live View',
        ),
        34 => array(
            'Id' => 34,
            'Label' => 'Quick AF Live View',
        ),
    );

}
