<?php

namespace PHPExiftool\Driver\Tag\Casio;

class LightingMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12330;

    protected $Name = 'LightingMode';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Lighting Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'High Dynamic Range',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Shadow Enhance Low',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Shadow Enhance High',
        ),
    );

}
