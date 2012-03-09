<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class DynamicRangeExpansion extends \PHPExiftool\Driver\Tag
{

    protected $Id = 105;

    protected $Name = 'DynamicRangeExpansion';

    protected $FullName = 'Pentax::Main';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Dynamic Range Expansion';

    protected $flag_Permanent = true;

    protected $Values = array(
        '0 0 0 0' => array(
            'Id' => '0 0 0 0',
            'Label' => 'Off',
        ),
        '1 0 0 0' => array(
            'Id' => '1 0 0 0',
            'Label' => 'On',
        ),
    );

}
