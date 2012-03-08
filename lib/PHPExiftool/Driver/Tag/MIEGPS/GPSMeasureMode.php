<?php

namespace PHPExiftool\Driver\Tag\MIEGPS;

class GPSMeasureMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'MeasureMode';

    protected $Name = 'GPSMeasureMode';

    protected $FullName = 'MIE::GPS';

    protected $GroupName = 'MIE-GPS';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-GPS';

    protected $g2 = 'Location';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'GPS Measure Mode';

    protected $Values = array(
        2 => array(
            'Id' => 2,
            'Label' => '2-D',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '3-D',
        ),
    );

}
