<?php

namespace PHPExiftool\Driver\Tag\MNG;

class ImageType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'ImageType';

    protected $FullName = 'MNG::DeltaPNGHeader';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Image Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unspecified',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'PNG',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'JNG',
        ),
    );

}
