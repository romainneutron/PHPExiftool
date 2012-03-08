<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AEBSequenceAutoCancel extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'AEBSequenceAutoCancel';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AEB Sequence/Auto Cancel';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '0,-,+/Enabled',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '0,-,+/Disabled',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '-,0,+/Enabled',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '-,0,+/Disabled',
        ),
    );

}
