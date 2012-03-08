<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class ContrastDetectAF extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4;

    protected $Name = 'ContrastDetectAF';

    protected $FullName = 'Nikon::AFInfo2';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Contrast Detect AF';

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
