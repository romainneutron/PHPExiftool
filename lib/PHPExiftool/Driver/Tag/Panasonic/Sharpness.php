<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class Sharpness extends \PHPExiftool\Driver\Tag
{

    protected $Id = 65;

    protected $Name = 'Sharpness';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Sharpness';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
    );

}
