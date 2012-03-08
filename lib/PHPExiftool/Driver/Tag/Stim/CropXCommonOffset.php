<?php

namespace PHPExiftool\Driver\Tag\Stim;

class CropXCommonOffset extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'CropXCommonOffset';

    protected $FullName = 'Stim::CropX';

    protected $GroupName = 'Stim';

    protected $g0 = 'Stim';

    protected $g1 = 'Stim';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Crop X Common Offset';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Common Offset Setting',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Individual Offset Setting',
        ),
    );

}
