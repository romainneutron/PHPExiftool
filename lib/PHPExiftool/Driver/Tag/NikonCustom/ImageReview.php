<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class ImageReview extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0.4';

    protected $Name = 'ImageReview';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Image Review';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'On',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Off',
        ),
    );

}
