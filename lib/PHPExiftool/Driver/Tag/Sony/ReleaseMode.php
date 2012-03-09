<?php

namespace PHPExiftool\Driver\Tag\Sony;

class ReleaseMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 45129;

    protected $Name = 'ReleaseMode';

    protected $FullName = 'Sony::Main';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Release Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Burst',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Exposure Bracketing',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'White Balance Bracketing',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'n/a',
        ),
    );

}
