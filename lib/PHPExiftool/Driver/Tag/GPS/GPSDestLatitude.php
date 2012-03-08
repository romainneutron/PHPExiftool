<?php

namespace PHPExiftool\Driver\Tag\GPS;

class GPSDestLatitude extends \PHPExiftool\Driver\Tag
{

    protected $Id = 20;

    protected $Name = 'GPSDestLatitude';

    protected $FullName = 'GPS::Main';

    protected $GroupName = 'GPS';

    protected $g0 = 'EXIF';

    protected $g1 = 'GPS';

    protected $g2 = 'Location';

    protected $Type = 'rational64u';

    protected $Writable = true;

    protected $Description = 'GPS Dest Latitude';

}
