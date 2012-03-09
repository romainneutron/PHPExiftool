<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class FocusPointWrap extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'FocusPointWrap';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Focus Point Wrap';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No Wrap',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Wrap',
        ),
    );

}
