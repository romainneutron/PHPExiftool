<?php

namespace PHPExiftool\Driver\Tag\QuickTime;

class LocationRole extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'location.role';

    protected $Name = 'LocationRole';

    protected $FullName = 'QuickTime::Keys';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Location Role';

    protected $local_g2 = 'Location';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Shooting Location',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Real Location',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Fictional Location',
        ),
    );

}
