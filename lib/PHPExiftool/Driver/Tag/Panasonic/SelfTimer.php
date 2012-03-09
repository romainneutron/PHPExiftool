<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class SelfTimer extends \PHPExiftool\Driver\Tag
{

    protected $Id = 46;

    protected $Name = 'SelfTimer';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Self Timer';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Off',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '10 s',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '2 s',
        ),
    );

}
