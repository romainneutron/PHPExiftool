<?php

namespace PHPExiftool\Driver\Tag\MXF;

class AlphaTransparency extends \PHPExiftool\Driver\Tag
{

    protected $Id = '060e2b34.0101.0102.05200102.00000000';

    protected $Name = 'AlphaTransparency';

    protected $FullName = 'MXF::Main';

    protected $GroupName = 'MXF';

    protected $g0 = 'MXF';

    protected $g1 = 'MXF';

    protected $g2 = 'Video';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Alpha Transparency';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not Inverted',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Inverted',
        ),
    );

}
