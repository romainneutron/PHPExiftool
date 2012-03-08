<?php

namespace PHPExiftool\Driver\Tag\GPS;

class GPSHPositioningError extends \PHPExiftool\Driver\Tag
{

    protected $Id = 31;

    protected $Name = 'GPSHPositioningError';

    protected $FullName = 'GPS::Main';

    protected $GroupName = 'GPS';

    protected $g0 = 'EXIF';

    protected $g1 = 'GPS';

    protected $g2 = 'Location';

    protected $Type = 'rational64u';

    protected $Writable = true;

    protected $Description = 'GPS Horizontal Positioning Error';

}
