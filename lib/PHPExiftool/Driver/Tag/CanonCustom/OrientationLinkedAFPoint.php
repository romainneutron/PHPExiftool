<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class OrientationLinkedAFPoint extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1302;

    protected $Name = 'OrientationLinkedAFPoint';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Orientation Linked AF Point';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Same for verical and horizontal',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Select different AF points',
        ),
    );

}
