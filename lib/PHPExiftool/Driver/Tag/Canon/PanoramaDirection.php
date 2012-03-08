<?php

namespace PHPExiftool\Driver\Tag\Canon;

class PanoramaDirection extends \PHPExiftool\Driver\Tag
{

    protected $Id = 5;

    protected $Name = 'PanoramaDirection';

    protected $FullName = 'Canon::Panorama';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Panorama Direction';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Left to Right',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Right to Left',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Bottom to Top',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Top to Bottom',
        ),
        4 => array(
            'Id' => 4,
            'Label' => '2x2 Matrix (Clockwise)',
        ),
    );

}
