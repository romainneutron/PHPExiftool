<?php

namespace PHPExiftool\Driver\Tag\FujiFilm;

class FujiFlashMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4112;

    protected $Name = 'FujiFlashMode';

    protected $FullName = 'FujiFilm::Main';

    protected $GroupName = 'FujiFilm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'FujiFilm';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Fuji Flash Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Off',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Red-eye reduction',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'External',
        ),
    );

}
