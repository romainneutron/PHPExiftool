<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class AFAndMeteringButtons extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1793;

    protected $Name = 'AFAndMeteringButtons';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'AF And Metering Buttons';

    protected $Index = 1;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Metering start',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Metering + AF start',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'AE lock',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'AF stop',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'No function',
        ),
    );

}
