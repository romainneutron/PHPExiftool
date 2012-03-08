<?php

namespace PHPExiftool\Driver\Tag\XMPPdf;

class Trapped extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Trapped';

    protected $Name = 'Trapped';

    protected $FullName = 'XMP::pdf';

    protected $GroupName = 'XMP-pdf';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-pdf';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Trapped';

    protected $Values = array(
        False => array(
            'Id' => False,
            'Label' => False,
        ),
        True => array(
            'Id' => True,
            'Label' => True,
        ),
        'Unknown' => array(
            'Id' => 'Unknown',
            'Label' => 'Unknown',
        ),
    );

}
