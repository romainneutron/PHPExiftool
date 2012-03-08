<?php

namespace PHPExiftool\Driver\Tag\Canon;

class Categories extends \PHPExiftool\Driver\Tag
{

    protected $Id = 35;

    protected $Name = 'Categories';

    protected $FullName = 'Canon::Main';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Categories';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'People',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Scenery',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Events',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'User 1',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'User 2',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'User 3',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'To Do',
        ),
    );

}
