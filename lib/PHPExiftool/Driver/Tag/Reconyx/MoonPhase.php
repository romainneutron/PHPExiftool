<?php

namespace PHPExiftool\Driver\Tag\Reconyx;

class MoonPhase extends \PHPExiftool\Driver\Tag
{

    protected $Id = 18;

    protected $Name = 'MoonPhase';

    protected $FullName = 'Reconyx::Main';

    protected $GroupName = 'Reconyx';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Reconyx';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Moon Phase';

    protected $local_g2 = 'Time';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'New',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'New Crescent',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'First Quarter',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Waxing Gibbous',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Full',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Waning Gibbous',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Last Quarter',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Old Crescent',
        ),
    );

}
