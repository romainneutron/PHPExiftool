<?php

namespace PHPExiftool\Driver\Tag\Composite;

class GPSAltitudeRef extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'GPSAltitudeRef';

    protected $Name = 'GPSAltitudeRef';

    protected $FullName = 'Composite';

    protected $GroupName = 'Composite';

    protected $g0 = 'Composite';

    protected $g1 = 'Composite';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'GPS Altitude Ref';

    protected $local_g2 = 'Location';

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

}
