<?php

namespace PHPExiftool\Driver\Tag\FujiFilm;

class Saturation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4099;

    protected $Name = 'Saturation';

    protected $FullName = 'FujiFilm::Main';

    protected $GroupName = 'FujiFilm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'FujiFilm';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Saturation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Medium High',
        ),
        256 => array(
            'Id' => 256,
            'Label' => 'High',
        ),
        384 => array(
            'Id' => 384,
            'Label' => 'Medium Low',
        ),
        512 => array(
            'Id' => 512,
            'Label' => 'Low',
        ),
        768 => array(
            'Id' => 768,
            'Label' => 'None (B&W)',
        ),
        769 => array(
            'Id' => 769,
            'Label' => 'B&W Green Filter',
        ),
        770 => array(
            'Id' => 770,
            'Label' => 'B&W Yellow Filter',
        ),
        771 => array(
            'Id' => 771,
            'Label' => 'B&W Blue Filter',
        ),
        784 => array(
            'Id' => 784,
            'Label' => 'B&W Sepia',
        ),
        32768 => array(
            'Id' => 32768,
            'Label' => 'Film Simulation',
        ),
    );

}
