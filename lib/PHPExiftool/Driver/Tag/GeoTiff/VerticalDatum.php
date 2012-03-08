<?php

namespace PHPExiftool\Driver\Tag\GeoTiff;

class VerticalDatum extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4098;

    protected $Name = 'VerticalDatum';

    protected $FullName = 'GeoTiff::Main';

    protected $GroupName = 'GeoTiff';

    protected $g0 = 'GeoTiff';

    protected $g1 = 'GeoTiff';

    protected $g2 = 'Location';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Vertical Datum';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Vertical Datum Base',
        ),
        32767 => array(
            'Id' => 32767,
            'Label' => 'User Defined',
        ),
    );

}
