<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class FlashFiring extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'FlashFiring';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Flash Firing';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Fires',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Does not fire',
        ),
    );

}
