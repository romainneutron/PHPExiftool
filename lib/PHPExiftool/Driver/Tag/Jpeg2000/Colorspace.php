<?php

namespace PHPExiftool\Driver\Tag\Jpeg2000;

class Colorspace extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'colr';

    protected $Name = 'Colorspace';

    protected $FullName = 'Jpeg2000::Main';

    protected $GroupName = 'Jpeg2000';

    protected $g0 = 'Jpeg2000';

    protected $g1 = 'Jpeg2000';

    protected $g2 = 'Image';

    protected $Type = 'binary';

    protected $Writable = false;

    protected $Description = 'Colorspace';

    protected $Index = 1;

    protected $Values = array(
        16 => array(
            'Id' => 16,
            'Label' => 'sRGB',
        ),
        17 => array(
            'Id' => 17,
            'Label' => 'Grayscale',
        ),
        18 => array(
            'Id' => 18,
            'Label' => 'sYCC',
        ),
    );

}
