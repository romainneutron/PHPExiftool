<?php

namespace PHPExiftool\Driver\Tag\MNG;

class LocalDeltaType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 7;

    protected $Name = 'LocalDeltaType';

    protected $FullName = 'MNG::CloneObject';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Local Delta Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Absolute',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Relative',
        ),
    );

}
