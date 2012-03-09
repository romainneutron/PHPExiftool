<?php

namespace PHPExiftool\Driver\Tag\Sony;

class FlashMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 35;

    protected $Name = 'FlashMode';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'ADI',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'TTL',
        ),
    );

}
