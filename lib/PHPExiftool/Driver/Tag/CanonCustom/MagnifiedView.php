<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class MagnifiedView extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'MagnifiedView';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Magnified View';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Image playback only',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Image review and playback',
        ),
    );

}
