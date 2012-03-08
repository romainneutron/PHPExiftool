<?php

namespace PHPExiftool\Driver\Tag\Stim;

class CropYCommonOffset extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'CropYCommonOffset';

    protected $FullName = 'Stim::CropY';

    protected $GroupName = 'Stim';

    protected $g0 = 'Stim';

    protected $g1 = 'Stim';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Crop Y Common Offset';

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
