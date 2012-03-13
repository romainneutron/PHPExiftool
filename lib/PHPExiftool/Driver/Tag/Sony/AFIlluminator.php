<?php

namespace PHPExiftool\Driver\Tag\Sony;

class AFIlluminator extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'AFIlluminator';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'AF Illuminator';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Off',
        ),
        2 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        3 => array(
            'Id' => 1,
            'Label' => 'Auto',
        ),
        4 => array(
            'Id' => 65535,
            'Label' => 'n/a',
        ),
    );

}
