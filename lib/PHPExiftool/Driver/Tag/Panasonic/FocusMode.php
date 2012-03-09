<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class FocusMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 7;

    protected $Name = 'FocusMode';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Focus Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Auto',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Manual',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Auto, Focus button',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Auto, Continuous',
        ),
    );

}
