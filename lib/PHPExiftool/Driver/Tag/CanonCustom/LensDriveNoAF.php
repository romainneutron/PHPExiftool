<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class LensDriveNoAF extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1285;

    protected $Name = 'LensDriveNoAF';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Lens Drive No AF';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Focus search on',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Focus search off',
        ),
    );

}
