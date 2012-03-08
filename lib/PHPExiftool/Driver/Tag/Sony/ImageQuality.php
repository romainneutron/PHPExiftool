<?php

namespace PHPExiftool\Driver\Tag\Sony;

class ImageQuality extends \PHPExiftool\Driver\Tag
{

    protected $Id = 29;

    protected $Name = 'ImageQuality';

    protected $FullName = 'Sony::PMP';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Image Quality';

    protected $Values = array(
        8 => array(
            'Id' => 8,
            'Label' => 'Snap Shot',
        ),
        23 => array(
            'Id' => 23,
            'Label' => 'Standard',
        ),
        51 => array(
            'Id' => 51,
            'Label' => 'Fine',
        ),
    );

}
