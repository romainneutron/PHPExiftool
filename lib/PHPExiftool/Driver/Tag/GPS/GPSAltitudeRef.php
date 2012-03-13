<?php

namespace PHPExiftool\Driver\Tag\GPS;

class GPSAltitudeRef extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'GPSAltitudeRef';

    protected $FullName = 'mixed';

    protected $GroupName = 'GPS';

    protected $g0 = 'mixed';

    protected $g1 = 'mixed';

    protected $g2 = 'mixed';

    protected $Type = 'mixed';

    protected $Writable = 'mixed';

    protected $Description = 'GPS Altitude Ref';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Above Sea Level',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Below Sea Level',
        ),
    );

    protected $local_g1 = 'mixed';

    protected $local_g2 = 'mixed';

}
