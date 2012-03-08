<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class AFSPrioritySelection extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'AF-SPrioritySelection';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AF-S Priority Selection';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Focus',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Release',
        ),
    );

}
