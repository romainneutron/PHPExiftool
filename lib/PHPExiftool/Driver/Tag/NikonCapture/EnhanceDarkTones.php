<?php

namespace PHPExiftool\Driver\Tag\NikonCapture;

class EnhanceDarkTones extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8;

    protected $Name = 'EnhanceDarkTones';

    protected $FullName = 'NikonCapture::Brightness';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Enhance Dark Tones';

    protected $flag_Permanent = true;

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
