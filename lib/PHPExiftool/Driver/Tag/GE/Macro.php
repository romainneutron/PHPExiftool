<?php

namespace PHPExiftool\Driver\Tag\GE;

class Macro extends \PHPExiftool\Driver\Tag
{

    protected $Id = 514;

    protected $Name = 'Macro';

    protected $FullName = 'GE::Main';

    protected $GroupName = 'GE';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'GE';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Macro';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
