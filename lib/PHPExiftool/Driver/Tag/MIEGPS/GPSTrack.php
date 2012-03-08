<?php

namespace PHPExiftool\Driver\Tag\MIEGPS;

class GPSTrack extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Heading';

    protected $Name = 'GPSTrack';

    protected $FullName = 'MIE::GPS';

    protected $GroupName = 'MIE-GPS';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-GPS';

    protected $g2 = 'Location';

    protected $Type = 'rational64s';

    protected $Writable = true;

    protected $Description = 'GPS Track';

}
