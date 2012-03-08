<?php

namespace PHPExiftool\Driver\Tag\Leica;

class JPEGSize extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12346;

    protected $Name = 'JPEGSize';

    protected $FullName = 'Panasonic::Subdir';

    protected $GroupName = 'Leica';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Leica';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'JPEG Size';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '5216x3472',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '3840x2592',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '2592x1728',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '1728x1152',
        ),
        4 => array(
            'Id' => 4,
            'Label' => '1280x864',
        ),
    );

}
