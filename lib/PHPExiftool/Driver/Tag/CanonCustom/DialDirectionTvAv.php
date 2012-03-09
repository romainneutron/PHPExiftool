<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class DialDirectionTvAv extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1798;

    protected $Name = 'DialDirectionTvAv';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Dial Direction Tv Av';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Reversed',
        ),
    );

}
