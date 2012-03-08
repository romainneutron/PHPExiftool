<?php

namespace PHPExiftool\Driver\Tag\Canon;

class AFMicroAdjActive extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'AFMicroAdjActive';

    protected $FullName = 'Canon::AFMicroAdj';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'AF Micro Adj Active';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Yes',
        ),
    );

}
