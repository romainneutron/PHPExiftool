<?php

namespace PHPExiftool\Driver\Tag\Canon;

class LongExposureNoiseReduction2 extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8;

    protected $Name = 'LongExposureNoiseReduction2';

    protected $FullName = 'Canon::FileInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Long Exposure Noise Reduction 2';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On (1D)',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'On',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Auto',
        ),
    );

}
