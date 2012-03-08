<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class ColorFilter extends \PHPExiftool\Driver\Tag
{

    protected $Id = 23;

    protected $Name = 'ColorFilter';

    protected $FullName = 'Pentax::Type2';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Color Filter';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Full',
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
