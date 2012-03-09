<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class FlashFired extends \PHPExiftool\Driver\Tag
{

    protected $Id = 32775;

    protected $Name = 'FlashFired';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash Fired';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'No',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Yes',
        ),
    );

}
