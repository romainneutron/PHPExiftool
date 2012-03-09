<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class RawDevColorSpace extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'RawDevColorSpace';

    protected $FullName = 'mixed';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Raw Dev Color Space';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'sRGB',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Adobe RGB',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Pro Photo RGB',
        ),
    );

}
