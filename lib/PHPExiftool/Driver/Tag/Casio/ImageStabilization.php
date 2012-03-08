<?php

namespace PHPExiftool\Driver\Tag\Casio;

class ImageStabilization extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12320;

    protected $Name = 'ImageStabilization';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Image Stabilization';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Best Shot',
        ),
        '0 0' => array(
            'Id' => '0 0',
            'Label' => 'Off',
        ),
        '0 3' => array(
            'Id' => '0 3',
            'Label' => 'CCD Shift',
        ),
        '2 3' => array(
            'Id' => '2 3',
            'Label' => 'High Speed Anti-Shake',
        ),
        '16 0' => array(
            'Id' => '16 0',
            'Label' => 'Slow Shutter',
        ),
        '18 0' => array(
            'Id' => '18 0',
            'Label' => 'Anti-Shake',
        ),
        '20 0' => array(
            'Id' => '20 0',
            'Label' => 'High Sensitivity',
        ),
    );

}
