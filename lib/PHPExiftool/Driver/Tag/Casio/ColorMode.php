<?php

namespace PHPExiftool\Driver\Tag\Casio;

class ColorMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12309;

    protected $Name = 'ColorMode';

    protected $FullName = 'Casio::Type2';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Color Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Black & White',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Sepia',
        ),
    );

}
