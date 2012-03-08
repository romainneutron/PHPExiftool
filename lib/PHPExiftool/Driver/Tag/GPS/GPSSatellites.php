<?php

namespace PHPExiftool\Driver\Tag\GPS;

class GPSSatellites extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8;

    protected $Name = 'GPSSatellites';

    protected $FullName = 'GPS::Main';

    protected $GroupName = 'GPS';

    protected $g0 = 'EXIF';

    protected $g1 = 'GPS';

    protected $g2 = 'Location';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'GPS Satellites';

}
