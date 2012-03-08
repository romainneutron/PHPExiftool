<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class GPSImgDirectionRef extends \PHPExiftool\Driver\Tag
{

    protected $Id = 18874384;

    protected $Name = 'GPSImgDirectionRef';

    protected $FullName = 'Nikon::NCTG';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'GPS Img Direction Ref';

    protected $local_g2 = 'Location';

    protected $Values = array(
        'M' => array(
            'Id' => 'M',
            'Label' => 'Magnetic North',
        ),
        'T' => array(
            'Id' => 'T',
            'Label' => 'True North',
        ),
    );

}
