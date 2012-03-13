<?php

namespace PHPExiftool\Driver\Tag\Casio;

class FlashIntensity extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'FlashIntensity';

    protected $FullName = 'Casio::Main';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash Intensity';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 11,
            'Label' => 'Weak',
        ),
        1 => array(
            'Id' => 12,
            'Label' => 'Low',
        ),
        2 => array(
            'Id' => 13,
            'Label' => 'Normal',
        ),
        3 => array(
            'Id' => 14,
            'Label' => 'High',
        ),
        4 => array(
            'Id' => 15,
            'Label' => 'Strong',
        ),
        5 => array(
            'Id' => 1,
            'Label' => 'Normal',
        ),
        6 => array(
            'Id' => 2,
            'Label' => 'Weak',
        ),
        7 => array(
            'Id' => 3,
            'Label' => 'Strong',
        ),
    );

}
