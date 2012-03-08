<?php

namespace PHPExiftool\Driver\Tag\Jpeg2000;

class ColorSpecMethod extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'ColorSpecMethod';

    protected $FullName = 'Jpeg2000::ColorSpec';

    protected $GroupName = 'Jpeg2000';

    protected $g0 = 'Jpeg2000';

    protected $g1 = 'Jpeg2000';

    protected $g2 = 'Image';

    protected $Type = 'int8s';

    protected $Writable = false;

    protected $Description = 'Color Spec Method';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Enumerated',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Restricted ICC',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Any ICC',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Vendor Color',
        ),
    );

}
