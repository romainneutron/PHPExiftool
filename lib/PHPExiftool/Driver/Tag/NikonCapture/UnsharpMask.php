<?php

namespace PHPExiftool\Driver\Tag\NikonCapture;

class UnsharpMask extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1990472192;

    protected $Name = 'UnsharpMask';

    protected $FullName = 'NikonCapture::Main';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Unsharp Mask';

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
