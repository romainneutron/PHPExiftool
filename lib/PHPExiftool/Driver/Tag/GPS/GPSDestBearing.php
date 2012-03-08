<?php

namespace PHPExiftool\Driver\Tag\GPS;

class GPSDestBearing extends \PHPExiftool\Driver\Tag
{

    protected $Id = 24;

    protected $Name = 'GPSDestBearing';

    protected $FullName = 'GPS::Main';

    protected $GroupName = 'GPS';

    protected $g0 = 'EXIF';

    protected $g1 = 'GPS';

    protected $g2 = 'Location';

    protected $Type = 'rational64u';

    protected $Writable = true;

    protected $Description = 'GPS Dest Bearing';

}
