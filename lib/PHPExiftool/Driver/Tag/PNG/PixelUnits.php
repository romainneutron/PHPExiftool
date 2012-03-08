<?php

namespace PHPExiftool\Driver\Tag\PNG;

class PixelUnits extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8;

    protected $Name = 'PixelUnits';

    protected $FullName = 'PNG::PhysicalPixel';

    protected $GroupName = 'PNG';

    protected $g0 = 'PNG';

    protected $g1 = 'PNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Pixel Units';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unknown',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Meters',
        ),
    );

}
