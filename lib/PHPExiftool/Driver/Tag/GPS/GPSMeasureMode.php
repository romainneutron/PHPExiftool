<?php

namespace PHPExiftool\Driver\Tag\GPS;

class GPSMeasureMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'GPSMeasureMode';

    protected $FullName = 'mixed';

    protected $GroupName = 'GPS';

    protected $g0 = 'mixed';

    protected $g1 = 'mixed';

    protected $g2 = 'mixed';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'GPS Measure Mode';

    protected $Values = array(
        2 => array(
            'Id' => 2,
            'Label' => '2-Dimensional Measurement',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '3-Dimensional Measurement',
        ),
    );

    protected $local_g1 = 'mixed';

    protected $local_g2 = 'mixed';

}
