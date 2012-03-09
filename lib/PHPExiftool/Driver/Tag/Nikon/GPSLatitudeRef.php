<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class GPSLatitudeRef extends \PHPExiftool\Driver\Tag
{

    protected $Id = 18874369;

    protected $Name = 'GPSLatitudeRef';

    protected $FullName = 'Nikon::NCTG';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'GPS Latitude Ref';

    protected $local_g2 = 'Location';

    protected $flag_Permanent = true;

    protected $Values = array(
        'N' => array(
            'Id' => 'N',
            'Label' => 'North',
        ),
        'S' => array(
            'Id' => 'S',
            'Label' => 'South',
        ),
    );

}
