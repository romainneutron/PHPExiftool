<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class AFAssistLamp extends \PHPExiftool\Driver\Tag
{

    protected $Id = 49;

    protected $Name = 'AFAssistLamp';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'AF Assist Lamp';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Fired',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Enabled but Not Used',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Disabled but Required',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Disabled and Not Required',
        ),
    );

}
