<?php

namespace PHPExiftool\Driver\Tag\MNG;

class MandatoryBackground extends \PHPExiftool\Driver\Tag
{

    protected $Id = 6;

    protected $Name = 'MandatoryBackground';

    protected $FullName = 'MNG::Background';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Mandatory Background';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Color and Image Advisory',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Color Mandatory, Image Advisory',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Color Advisory, Image Mandatory',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Color and Image Mandatory',
        ),
    );

}
