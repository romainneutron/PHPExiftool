<?php

namespace PHPExiftool\Driver\Tag\NikonCapture;

class RedEyeCorrection extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'RedEyeCorrection';

    protected $FullName = 'NikonCapture::RedEyeData';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Red Eye Correction';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Automatic',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Click on Eyes',
        ),
    );

}
