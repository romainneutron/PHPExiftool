<?php

namespace PHPExiftool\Driver\Tag\FujiFilm;

class Sharpness extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4097;

    protected $Name = 'Sharpness';

    protected $FullName = 'FujiFilm::Main';

    protected $GroupName = 'FujiFilm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'FujiFilm';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Sharpness';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Soft',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Soft2',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Normal',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Hard',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Hard2',
        ),
        130 => array(
            'Id' => 130,
            'Label' => 'Medium Soft',
        ),
        132 => array(
            'Id' => 132,
            'Label' => 'Medium Hard',
        ),
        32768 => array(
            'Id' => 32768,
            'Label' => 'Film Simulation',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'n/a',
        ),
    );

}
