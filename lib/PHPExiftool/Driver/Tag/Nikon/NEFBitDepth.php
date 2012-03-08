<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class NEFBitDepth extends \PHPExiftool\Driver\Tag
{

    protected $Id = 3618;

    protected $Name = 'NEFBitDepth';

    protected $FullName = 'Nikon::Main';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'NEF Bit Depth';

    protected $Values = array(
        '0 0 0 0' => array(
            'Id' => '0 0 0 0',
            'Label' => 'n/a (JPEG)',
        ),
        '8 8 8 0' => array(
            'Id' => '8 8 8 0',
            'Label' => '8 x 3',
        ),
        '12 0 0 0' => array(
            'Id' => '12 0 0 0',
            'Label' => 12,
        ),
        '14 0 0 0' => array(
            'Id' => '14 0 0 0',
            'Label' => 14,
        ),
    );

}
