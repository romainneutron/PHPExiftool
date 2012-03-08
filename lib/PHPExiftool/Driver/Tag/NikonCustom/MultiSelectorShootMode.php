<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class MultiSelectorShootMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'MultiSelectorShootMode';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Multi Selector Shoot Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Select Center Focus Point',
        ),
        64 => array(
            'Id' => 64,
            'Label' => 'Highlight Active Focus Point',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Not Used',
        ),
    );

}
