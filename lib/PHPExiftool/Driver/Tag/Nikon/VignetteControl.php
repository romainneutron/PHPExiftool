<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class VignetteControl extends \PHPExiftool\Driver\Tag
{

    protected $Id = 42;

    protected $Name = 'VignetteControl';

    protected $FullName = 'Nikon::Main';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Vignette Control';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Low',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Normal',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'High',
        ),
    );

}
