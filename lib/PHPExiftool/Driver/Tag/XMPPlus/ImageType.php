<?php

namespace PHPExiftool\Driver\Tag\XMPPlus;

class ImageType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ImageType';

    protected $Name = 'ImageType';

    protected $FullName = 'XMP::plus';

    protected $GroupName = 'XMP-plus';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-plus';

    protected $g2 = 'Author';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Image Type';

    protected $Values = array(
        'TY-ILL' => array(
            'Id' => 'TY-ILL',
            'Label' => 'Illustrated Image',
        ),
        'TY-MCI' => array(
            'Id' => 'TY-MCI',
            'Label' => 'Multimedia or Composited Image',
        ),
        'TY-OTR' => array(
            'Id' => 'TY-OTR',
            'Label' => 'Other',
        ),
        'TY-PHO' => array(
            'Id' => 'TY-PHO',
            'Label' => 'Photographic Image',
        ),
        'TY-VID' => array(
            'Id' => 'TY-VID',
            'Label' => 'Video',
        ),
    );

}
