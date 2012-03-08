<?php

namespace PHPExiftool\Driver\Tag\Canon;

class ModifiedSharpnessFreq extends \PHPExiftool\Driver\Tag
{

    protected $Id = 3;

    protected $Name = 'ModifiedSharpnessFreq';

    protected $FullName = 'Canon::ModifiedInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Modified Sharpness Freq';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'n/a',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Lowest',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Low',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Standard',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'High',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Highest',
        ),
    );

}
