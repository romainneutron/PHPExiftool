<?php

namespace PHPExiftool\Driver\Tag\Sanyo;

class Macro extends \PHPExiftool\Driver\Tag
{

    protected $Id = 514;

    protected $Name = 'Macro';

    protected $FullName = 'Sanyo::Main';

    protected $GroupName = 'Sanyo';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sanyo';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Macro';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Macro',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'View',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Manual',
        ),
    );

}
