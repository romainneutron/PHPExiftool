<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class GPSLongitudeRef extends \PHPExiftool\Driver\Tag
{

    protected $Id = 18874371;

    protected $Name = 'GPSLongitudeRef';

    protected $FullName = 'Nikon::NCTG';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'GPS Longitude Ref';

    protected $local_g2 = 'Location';

    protected $flag_Permanent = true;

    protected $Values = array(
        'E' => array(
            'Id' => 'E',
            'Label' => 'East',
        ),
        'W' => array(
            'Id' => 'W',
            'Label' => 'West',
        ),
    );

}
