<?php

namespace PHPExiftool\Driver\Tag\Canon;

class ImageStabilization extends \PHPExiftool\Driver\Tag
{

    protected $Id = 34;

    protected $Name = 'ImageStabilization';

    protected $FullName = 'Canon::CameraSettings';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

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
            'Label' => 'On, Shot Only',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'On, Panning',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'On, Video',
        ),
    );

}
