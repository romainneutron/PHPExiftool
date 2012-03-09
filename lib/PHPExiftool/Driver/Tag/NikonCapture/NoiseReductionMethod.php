<?php

namespace PHPExiftool\Driver\Tag\NikonCapture;

class NoiseReductionMethod extends \PHPExiftool\Driver\Tag
{

    protected $Id = 17;

    protected $Name = 'NoiseReductionMethod';

    protected $FullName = 'NikonCapture::NoiseReduction';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Noise Reduction Method';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Faster',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Better Quality',
        ),
    );

}
