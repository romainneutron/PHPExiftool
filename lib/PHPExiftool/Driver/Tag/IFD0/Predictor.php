<?php

namespace PHPExiftool\Driver\Tag\IFD0;

class Predictor extends \PHPExiftool\Driver\Tag
{

    protected $Id = 317;

    protected $Name = 'Predictor';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Predictor';

    protected $flag_Unsafe = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'None',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Horizontal differencing',
        ),
    );

}
