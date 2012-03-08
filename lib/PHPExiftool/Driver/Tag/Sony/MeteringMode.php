<?php

namespace PHPExiftool\Driver\Tag\Sony;

class MeteringMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'MeteringMode';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Metering Mode';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Multi-segment',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Center-weighted Average',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Spot',
        ),
    );

}
