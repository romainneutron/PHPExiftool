<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class ArtFilter extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1321;

    protected $Name = 'ArtFilter';

    protected $FullName = 'Olympus::CameraSettings';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Art Filter';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Soft Focus',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Pop Art',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Pale & Light Color',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Light Tone',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Pin Hole',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Grainy Film',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Diorama',
        ),
        10 => array(
            'Id' => 10,
            'Label' => 'Cross Process',
        ),
        12 => array(
            'Id' => 12,
            'Label' => 'Fish Eye',
        ),
        13 => array(
            'Id' => 13,
            'Label' => 'Drawing',
        ),
    );

}
