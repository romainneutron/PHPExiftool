<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class FlashButtonFunction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1806;

    protected $Name = 'FlashButtonFunction';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Flash Button Function';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Raise built-in flash',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'ISO speed',
        ),
    );

}
