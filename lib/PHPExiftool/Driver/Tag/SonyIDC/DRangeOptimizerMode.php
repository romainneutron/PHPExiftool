<?php

namespace PHPExiftool\Driver\Tag\SonyIDC;

class DRangeOptimizerMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 32802;

    protected $Name = 'D-RangeOptimizerMode';

    protected $FullName = 'SonyIDC::Main';

    protected $GroupName = 'SonyIDC';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'SonyIDC';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'D-Range Optimizer Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Auto',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Manual',
        ),
    );

}
