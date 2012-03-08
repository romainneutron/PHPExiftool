<?php

namespace PHPExiftool\Driver\Tag\Matroska;

class AspectRatioType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 5299;

    protected $Name = 'AspectRatioType';

    protected $FullName = 'Matroska::Main';

    protected $GroupName = 'Matroska';

    protected $g0 = 'Matroska';

    protected $g1 = 'Matroska';

    protected $g2 = 'Video';

    protected $Type = 'unsigned';

    protected $Writable = false;

    protected $Description = 'Aspect Ratio Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Free Resizing',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Keep Aspect Ratio',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Fixed',
        ),
    );

}
