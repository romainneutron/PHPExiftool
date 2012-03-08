<?php

namespace PHPExiftool\Driver\Tag\Canon;

class MiniatureFilterOrientation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1026;

    protected $Name = 'MiniatureFilterOrientation';

    protected $FullName = 'Canon::FilterInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Miniature Filter Orientation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Horizontal',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Vertical',
        ),
    );

}
