<?php

namespace PHPExiftool\Driver\Tag\FlashPix;

class OriginalMedium extends \PHPExiftool\Driver\Tag
{

    protected $Id = 687865858;

    protected $Name = 'OriginalMedium';

    protected $FullName = 'FlashPix::ImageInfo';

    protected $GroupName = 'FlashPix';

    protected $g0 = 'FlashPix';

    protected $g1 = 'FlashPix';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Original Medium';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Continuous Tone Image',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Halftone Image',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Line Art',
        ),
    );

}
