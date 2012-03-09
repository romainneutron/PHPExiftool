<?php

namespace PHPExiftool\Driver\Tag\Sanyo;

class FlashMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 549;

    protected $Name = 'FlashMode';

    protected $FullName = 'Sanyo::Main';

    protected $GroupName = 'Sanyo';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sanyo';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Force',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Disabled',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Red eye',
        ),
    );

}
