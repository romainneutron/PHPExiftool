<?php

namespace PHPExiftool\Driver\Tag\MIEGPS;

class GPSMapDatum extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Datum';

    protected $Name = 'GPSMapDatum';

    protected $FullName = 'MIE::GPS';

    protected $GroupName = 'MIE-GPS';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-GPS';

    protected $g2 = 'Location';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'GPS Map Datum';

}
