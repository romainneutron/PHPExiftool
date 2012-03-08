<?php

namespace PHPExiftool\Driver\Tag\GPS;

class GPSDestDistanceRef extends \PHPExiftool\Driver\Tag
{

    protected $Id = 25;

    protected $Name = 'GPSDestDistanceRef';

    protected $FullName = 'GPS::Main';

    protected $GroupName = 'GPS';

    protected $g0 = 'EXIF';

    protected $g1 = 'GPS';

    protected $g2 = 'Location';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'GPS Dest Distance Ref';

    protected $Values = array(
        'K' => array(
            'Id' => 'K',
            'Label' => 'Kilometers',
        ),
        'M' => array(
            'Id' => 'M',
            'Label' => 'Miles',
        ),
        'N' => array(
            'Id' => 'N',
            'Label' => 'Nautical Miles',
        ),
    );

}
