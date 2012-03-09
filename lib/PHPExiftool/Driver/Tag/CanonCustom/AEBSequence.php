<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AEBSequence extends \PHPExiftool\Driver\Tag
{

    protected $Id = 261;

    protected $Name = 'AEBSequence';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'AEB Sequence';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '0,-,+',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '-,0,+',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '+,0,-',
        ),
    );

}
