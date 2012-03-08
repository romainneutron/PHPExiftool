<?php

namespace PHPExiftool\Driver\Tag\FujiFilm;

class ColorMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4624;

    protected $Name = 'ColorMode';

    protected $FullName = 'FujiFilm::Main';

    protected $GroupName = 'FujiFilm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'FujiFilm';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Color Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Standard',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Chrome',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 'B & W',
        ),
    );

}
