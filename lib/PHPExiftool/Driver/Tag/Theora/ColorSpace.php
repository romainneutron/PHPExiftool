<?php

namespace PHPExiftool\Driver\Tag\Theora;

class ColorSpace extends \PHPExiftool\Driver\Tag
{

    protected $Id = 29;

    protected $Name = 'ColorSpace';

    protected $FullName = 'Theora::Identification';

    protected $GroupName = 'Theora';

    protected $g0 = 'Theora';

    protected $g1 = 'Theora';

    protected $g2 = 'Video';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Color Space';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Undefined',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Rec. 470M',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Rec. 470BG',
        ),
    );

}
