<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class ImageStabilization extends \PHPExiftool\Driver\Tag
{

    protected $Id = 26;

    protected $Name = 'ImageStabilization';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Image Stabilization';

    protected $Values = array(
        2 => array(
            'Id' => 2,
            'Label' => 'On, Mode 1',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Off',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'On, Mode 2',
        ),
    );

}
