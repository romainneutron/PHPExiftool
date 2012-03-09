<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class ShakeReduction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'ShakeReduction';

    protected $FullName = 'Pentax::SRInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Shake Reduction';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Off (4)',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'On but Disabled',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'On (Video)',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'On (7)',
        ),
        15 => array(
            'Id' => 15,
            'Label' => 'On (15)',
        ),
    );

}
