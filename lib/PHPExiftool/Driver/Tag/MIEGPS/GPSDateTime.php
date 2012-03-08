<?php

namespace PHPExiftool\Driver\Tag\MIEGPS;

class GPSDateTime extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'DateTime';

    protected $Name = 'GPSDateTime';

    protected $FullName = 'MIE::GPS';

    protected $GroupName = 'MIE-GPS';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-GPS';

    protected $g2 = 'Location';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'GPS Date Time';

    protected $local_g2 = 'Time';

}
