<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class SubjectDistanceRange extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'SubjectDistanceRange';

    protected $Name = 'SubjectDistanceRange';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Subject Distance Range';

    protected $local_g2 = 'Camera';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unknown',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Macro',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Close',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Distant',
        ),
    );

}
