<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class FlashSource extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4;

    protected $Name = 'FlashSource';

    protected $FullName = 'mixed';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Flash Source';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'External',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Internal',
        ),
    );

}
