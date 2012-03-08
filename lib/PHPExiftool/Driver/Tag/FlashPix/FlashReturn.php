<?php

namespace PHPExiftool\Driver\Tag\FlashPix;

class FlashReturn extends \PHPExiftool\Driver\Tag
{

    protected $Id = 620757005;

    protected $Name = 'FlashReturn';

    protected $FullName = 'FlashPix::ImageInfo';

    protected $GroupName = 'FlashPix';

    protected $g0 = 'FlashPix';

    protected $g1 = 'FlashPix';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Flash Return';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Subject Outside Flash Range',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Subject Inside Flash Range',
        ),
    );

}
