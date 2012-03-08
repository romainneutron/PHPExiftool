<?php

namespace PHPExiftool\Driver\Tag\Sigma;

class MeteringMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 9;

    protected $Name = 'MeteringMode';

    protected $FullName = 'Sigma::Main';

    protected $GroupName = 'Sigma';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sigma';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Metering Mode';

    protected $Values = array(
        8 => array(
            'Id' => 8,
            'Label' => 'Multi-segment',
        ),
        'A' => array(
            'Id' => 'A',
            'Label' => 'Average',
        ),
        'C' => array(
            'Id' => 'C',
            'Label' => 'Center-weighted average',
        ),
    );

}
