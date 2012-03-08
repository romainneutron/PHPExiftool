<?php

namespace PHPExiftool\Driver\Tag\FujiFilm;

class NoiseReduction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4107;

    protected $Name = 'NoiseReduction';

    protected $FullName = 'FujiFilm::Main';

    protected $GroupName = 'FujiFilm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'FujiFilm';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Noise Reduction';

    protected $Values = array(
        64 => array(
            'Id' => 64,
            'Label' => 'Low',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Normal',
        ),
        256 => array(
            'Id' => 256,
            'Label' => 'n/a',
        ),
    );

}
