<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class ExternalFlashBounce extends \PHPExiftool\Driver\Tag
{

    protected $Id = 26;

    protected $Name = 'ExternalFlashBounce';

    protected $FullName = 'Pentax::FlashInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'External Flash Bounce';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'n/a',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Direct',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 'Bounce',
        ),
    );

}
