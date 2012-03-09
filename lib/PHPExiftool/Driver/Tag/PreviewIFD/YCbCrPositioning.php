<?php

namespace PHPExiftool\Driver\Tag\PreviewIFD;

class YCbCrPositioning extends \PHPExiftool\Driver\Tag
{

    protected $Id = 531;

    protected $Name = 'YCbCrPositioning';

    protected $FullName = 'Nikon::PreviewIFD';

    protected $GroupName = 'PreviewIFD';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'PreviewIFD';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Y Cb Cr Positioning';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Centered',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Co-sited',
        ),
    );

}
