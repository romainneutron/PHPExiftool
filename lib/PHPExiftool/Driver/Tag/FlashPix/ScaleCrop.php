<?php

namespace PHPExiftool\Driver\Tag\FlashPix;

class ScaleCrop extends \PHPExiftool\Driver\Tag
{

    protected $Id = 11;

    protected $Name = 'ScaleCrop';

    protected $FullName = 'FlashPix::DocumentInfo';

    protected $GroupName = 'FlashPix';

    protected $g0 = 'FlashPix';

    protected $g1 = 'FlashPix';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Scale Crop';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Yes',
        ),
    );

}
