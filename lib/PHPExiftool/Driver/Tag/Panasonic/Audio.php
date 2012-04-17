<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class Audio extends \PHPExiftool\Driver\Tag
{

    protected $Id = 32;

    protected $Name = 'Audio';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Audio';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Yes',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'No',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Stereo',
        ),
    );

}
