<?php

namespace PHPExiftool\Driver\Tag\GPS;

class GPSDateStamp extends \PHPExiftool\Driver\Tag
{

    protected $Id = 29;

    protected $Name = 'GPSDateStamp';

    protected $FullName = 'GPS::Main';

    protected $GroupName = 'GPS';

    protected $g0 = 'EXIF';

    protected $g1 = 'GPS';

    protected $g2 = 'Location';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'GPS Date Stamp';

    protected $local_g2 = 'Time';

}
