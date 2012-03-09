<?php

namespace PHPExiftool\Driver\Tag\FujiFilm;

class DynamicRange extends \PHPExiftool\Driver\Tag
{

    protected $Id = 5120;

    protected $Name = 'DynamicRange';

    protected $FullName = 'FujiFilm::Main';

    protected $GroupName = 'FujiFilm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'FujiFilm';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Dynamic Range';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Standard',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Wide',
        ),
    );

}
