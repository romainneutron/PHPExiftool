<?php

namespace PHPExiftool\Driver\Tag\Sony;

class AFAreaMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'AFAreaMode';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'AF Area Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Wide',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Local',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Spot',
        ),
        3 => array(
            'Id' => 1,
            'Label' => 'Wide',
        ),
        4 => array(
            'Id' => 2,
            'Label' => 'Spot',
        ),
        5 => array(
            'Id' => 3,
            'Label' => 'Local',
        ),
    );

}
