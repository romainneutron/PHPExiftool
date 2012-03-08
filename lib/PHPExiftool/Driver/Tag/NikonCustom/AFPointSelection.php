<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class AFPointSelection extends \PHPExiftool\Driver\Tag
{

    protected $Id = '1.3';

    protected $Name = 'AFPointSelection';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AF Point Selection';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '51 Points',
        ),
        16 => array(
            'Id' => 16,
            'Label' => '11 Points',
        ),
    );

}
