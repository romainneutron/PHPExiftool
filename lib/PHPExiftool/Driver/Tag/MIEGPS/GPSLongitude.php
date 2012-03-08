<?php

namespace PHPExiftool\Driver\Tag\MIEGPS;

class GPSLongitude extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Longitude';

    protected $Name = 'GPSLongitude';

    protected $FullName = 'MIE::GPS';

    protected $GroupName = 'MIE-GPS';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-GPS';

    protected $g2 = 'Location';

    protected $Type = 'rational64s';

    protected $Writable = true;

    protected $Description = 'GPS Longitude';

}
