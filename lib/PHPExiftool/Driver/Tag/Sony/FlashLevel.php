<?php

namespace PHPExiftool\Driver\Tag\Sony;

class FlashLevel extends \PHPExiftool\Driver\Tag
{

    protected $Id = 45128;

    protected $Name = 'FlashLevel';

    protected $FullName = 'Sony::Main';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Flash Level';

    protected $flag_Permanent = true;

    protected $Values = array(
        '-32768' => array(
            'Id' => '-32768',
            'Label' => 'Low',
        ),
        '-3' => array(
            'Id' => '-3',
            'Label' => '-3/3',
        ),
        '-2' => array(
            'Id' => '-2',
            'Label' => '-2/3',
        ),
        '-1' => array(
            'Id' => '-1',
            'Label' => '-1/3',
        ),
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '+1/3',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '+2/3',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '+3/3',
        ),
        32767 => array(
            'Id' => 32767,
            'Label' => 'High',
        ),
    );

}
