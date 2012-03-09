<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class RawDevEditStatus extends \PHPExiftool\Driver\Tag
{

    protected $Id = 267;

    protected $Name = 'RawDevEditStatus';

    protected $FullName = 'Olympus::RawDevelopment';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Raw Dev Edit Status';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Original',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Edited (Landscape)',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Edited (Portrait)',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Edited (Portrait)',
        ),
    );

}
