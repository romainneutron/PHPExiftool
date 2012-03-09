<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class StartMovieShooting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1805;

    protected $Name = 'StartMovieShooting';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Start Movie Shooting';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Default (from LV)',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Quick start (FEL button)',
        ),
    );

}
