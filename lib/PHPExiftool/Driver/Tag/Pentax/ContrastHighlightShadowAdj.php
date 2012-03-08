<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class ContrastHighlightShadowAdj extends \PHPExiftool\Driver\Tag
{

    protected $Id = 111;

    protected $Name = 'ContrastHighlightShadowAdj';

    protected $FullName = 'Pentax::Main';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Contrast Highlight/Shadow Adj';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
