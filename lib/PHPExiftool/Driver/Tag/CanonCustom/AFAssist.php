<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AFAssist extends \PHPExiftool\Driver\Tag
{

    protected $Id = 5;

    protected $Name = 'AFAssist';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'mixed';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Emits/Fires',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Does not emit/Fires',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Only ext. flash emits/Fires',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Emits/Does not fire',
        ),
    );

}
