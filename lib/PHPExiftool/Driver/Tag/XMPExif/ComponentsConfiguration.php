<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class ComponentsConfiguration extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ComponentsConfiguration';

    protected $Name = 'ComponentsConfiguration';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Components Configuration';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '-',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Y',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Cb',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Cr',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'R',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'G',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'B',
        ),
    );

}
