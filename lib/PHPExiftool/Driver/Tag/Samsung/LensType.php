<?php

namespace PHPExiftool\Driver\Tag\Samsung;

class LensType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 40963;

    protected $Name = 'LensType';

    protected $FullName = 'Samsung::Type2';

    protected $GroupName = 'Samsung';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Samsung';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Lens Type';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Built-in',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Samsung 30mm F2 Pancake',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Samsung Zoom 18-55mm F3.5-5.6 OIS',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Samsung Zoom 50-200mm F4-5.6 ED OIS',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Samsung 20-50mm F3.5-5.6 Compact Zoom',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Samsung 20mm F2.8 Pancake',
        ),
    );

}
