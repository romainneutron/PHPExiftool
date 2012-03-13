<?php

namespace PHPExiftool\Driver\Tag\GPS;

class GPSTrackRef extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'GPSTrackRef';

    protected $FullName = 'mixed';

    protected $GroupName = 'GPS';

    protected $g0 = 'mixed';

    protected $g1 = 'mixed';

    protected $g2 = 'mixed';

    protected $Type = 'string';

    protected $Writable = '';

    protected $Description = 'GPS Track Ref';

    protected $Values = array(
        'M' => array(
            'Id' => 'M',
            'Label' => 'Magnetic North',
        ),
        'T' => array(
            'Id' => 'T',
            'Label' => 'True North',
        ),
    );

    protected $local_g1 = 'mixed';

    protected $local_g2 = 'mixed';

}
