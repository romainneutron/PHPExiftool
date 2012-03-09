<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class MenuButtonDisplayPosition extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'MenuButtonDisplayPosition';

    protected $FullName = 'mixed';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Menu Button Display Position';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Previous (top if power off)',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Previous',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Top',
        ),
    );

}
