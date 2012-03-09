<?php

namespace PHPExiftool\Driver\Tag\Canon;

class AFMicroAdjMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'AFMicroAdjMode';

    protected $FullName = 'Canon::AFMicroAdj';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'AF Micro Adj Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Disable',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Adjust all by the same amount',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Adjust by lens',
        ),
    );

}
