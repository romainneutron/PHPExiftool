<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class SRResult extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'SRResult';

    protected $FullName = 'Pentax::SRInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'SR Result';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not stabilized',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Stabilized',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Not ready',
        ),
    );

}
