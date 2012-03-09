<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AEBShotCount extends \PHPExiftool\Driver\Tag
{

    protected $Id = 262;

    protected $Name = 'AEBShotCount';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'AEB Shot Count';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 3,
        ),
        1 => array(
            'Id' => 1,
            'Label' => 2,
        ),
        2 => array(
            'Id' => 2,
            'Label' => 5,
        ),
        3 => array(
            'Id' => 3,
            'Label' => 7,
        ),
    );

}
