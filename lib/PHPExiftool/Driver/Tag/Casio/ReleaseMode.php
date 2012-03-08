<?php

namespace PHPExiftool\Driver\Tag\Casio;

class ReleaseMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12289;

    protected $Name = 'ReleaseMode';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Release Mode';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Normal',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'AE Bracketing',
        ),
        11 => array(
            'Id' => 11,
            'Label' => 'WB Bracketing',
        ),
        13 => array(
            'Id' => 13,
            'Label' => 'Contrast Bracketing',
        ),
        19 => array(
            'Id' => 19,
            'Label' => 'High Speed Burst',
        ),
    );

}
