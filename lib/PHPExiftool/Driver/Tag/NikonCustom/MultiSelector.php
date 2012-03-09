<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class MultiSelector extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'MultiSelector';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Multi Selector';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Do Nothing',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Reset Meter-off Delay',
        ),
    );

}
