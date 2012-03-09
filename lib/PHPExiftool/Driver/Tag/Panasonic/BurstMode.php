<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class BurstMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 42;

    protected $Name = 'BurstMode';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Burst Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Infinite',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Unlimited',
        ),
    );

}
