<?php

namespace PHPExiftool\Driver\Tag\FujiFilm;

class EXRMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4148;

    protected $Name = 'EXRMode';

    protected $FullName = 'FujiFilm::Main';

    protected $GroupName = 'FujiFilm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'FujiFilm';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'EXR Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        256 => array(
            'Id' => 256,
            'Label' => 'HR (High Resolution)',
        ),
        512 => array(
            'Id' => 512,
            'Label' => 'SN (Signal to Noise priority)',
        ),
        768 => array(
            'Id' => 768,
            'Label' => 'DR (Dynamic Range priority)',
        ),
    );

}
