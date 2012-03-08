<?php

namespace PHPExiftool\Driver\Tag\SigmaRaw;

class MeteringMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'AEMODE';

    protected $Name = 'MeteringMode';

    protected $FullName = 'SigmaRaw::Properties';

    protected $GroupName = 'SigmaRaw';

    protected $g0 = 'SigmaRaw';

    protected $g1 = 'SigmaRaw';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Metering Mode';

    protected $Values = array(
        8 => array(
            'Id' => 8,
            'Label' => '8-segment',
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
