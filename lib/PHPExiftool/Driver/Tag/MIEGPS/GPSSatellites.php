<?php

namespace PHPExiftool\Driver\Tag\MIEGPS;

class GPSSatellites extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Satellites';

    protected $Name = 'GPSSatellites';

    protected $FullName = 'MIE::GPS';

    protected $GroupName = 'MIE-GPS';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-GPS';

    protected $g2 = 'Location';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'GPS Satellites';

}
