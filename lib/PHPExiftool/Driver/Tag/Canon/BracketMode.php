<?php

namespace PHPExiftool\Driver\Tag\Canon;

class BracketMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 3;

    protected $Name = 'BracketMode';

    protected $FullName = 'Canon::FileInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Bracket Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'AEB',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'FEB',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'ISO',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'WB',
        ),
    );

}
