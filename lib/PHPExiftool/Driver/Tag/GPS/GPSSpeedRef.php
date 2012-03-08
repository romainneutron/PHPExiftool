<?php

namespace PHPExiftool\Driver\Tag\GPS;

class GPSSpeedRef extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'GPSSpeedRef';

    protected $FullName = 'mixed';

    protected $GroupName = 'GPS';

    protected $g0 = 'mixed';

    protected $g1 = 'mixed';

    protected $g2 = 'mixed';

    protected $Type = 'string';

    protected $Writable = 'mixed';

    protected $Description = 'GPS Speed Ref';

    protected $Values = array(
        'K' => array(
            'Id' => 'K',
            'Label' => 'km/h',
        ),
        'M' => array(
            'Id' => 'M',
            'Label' => 'mph',
        ),
        'N' => array(
            'Id' => 'N',
            'Label' => 'knots',
        ),
    );

    protected $local_g1 = 'mixed';

    protected $local_g2 = 'mixed';

}
