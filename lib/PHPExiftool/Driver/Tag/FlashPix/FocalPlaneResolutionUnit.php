<?php

namespace PHPExiftool\Driver\Tag\FlashPix;

class FocalPlaneResolutionUnit extends \PHPExiftool\Driver\Tag
{

    protected $Id = 637534211;

    protected $Name = 'FocalPlaneResolutionUnit';

    protected $FullName = 'FlashPix::ImageInfo';

    protected $GroupName = 'FlashPix';

    protected $g0 = 'FlashPix';

    protected $g1 = 'FlashPix';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Focal Plane Resolution Unit';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'None',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'inches',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'cm',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'mm',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'um',
        ),
    );

}
