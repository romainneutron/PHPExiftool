<?php

namespace PHPExiftool\Driver\Tag\MIEUTM;

class UTMNorthing extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Northing';

    protected $Name = 'UTMNorthing';

    protected $FullName = 'MIE::UTM';

    protected $GroupName = 'MIE-UTM';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-UTM';

    protected $g2 = 'Location';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'UTM Northing';

}
