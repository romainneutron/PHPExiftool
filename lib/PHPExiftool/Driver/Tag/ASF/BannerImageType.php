<?php

namespace PHPExiftool\Driver\Tag\ASF;

class BannerImageType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'BannerImageType';

    protected $FullName = 'mixed';

    protected $GroupName = 'ASF';

    protected $g0 = 'ASF';

    protected $g1 = 'ASF';

    protected $g2 = 'mixed';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Banner Image Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Bitmap',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'JPEG',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'GIF',
        ),
    );

}
