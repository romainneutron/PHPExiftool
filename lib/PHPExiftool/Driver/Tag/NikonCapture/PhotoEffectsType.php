<?php

namespace PHPExiftool\Driver\Tag\NikonCapture;

class PhotoEffectsType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'PhotoEffectsType';

    protected $FullName = 'NikonCapture::PhotoEffects';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Photo Effects Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'B&W',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Sepia',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Tinted',
        ),
    );

}
