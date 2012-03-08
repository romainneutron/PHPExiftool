<?php

namespace PHPExiftool\Driver\Tag\NikonCapture;

class ColorMoireReduction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 21;

    protected $Name = 'ColorMoireReduction';

    protected $FullName = 'NikonCapture::NoiseReduction';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Color Moire Reduction';

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
