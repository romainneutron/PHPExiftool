<?php

namespace PHPExiftool\Driver\Tag\MNG;

class CompositionMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 13;

    protected $Name = 'CompositionMode';

    protected $FullName = 'MNG::PasteImage';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Composition Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Over',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Replace',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Under',
        ),
    );

}
