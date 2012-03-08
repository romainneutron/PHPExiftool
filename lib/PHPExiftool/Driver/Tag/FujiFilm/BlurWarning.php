<?php

namespace PHPExiftool\Driver\Tag\FujiFilm;

class BlurWarning extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4864;

    protected $Name = 'BlurWarning';

    protected $FullName = 'FujiFilm::Main';

    protected $GroupName = 'FujiFilm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'FujiFilm';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Blur Warning';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Blur Warning',
        ),
    );

}
