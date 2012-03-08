<?php

namespace PHPExiftool\Driver\Tag\XMPXmpDM;

class StretchMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'stretchMode';

    protected $Name = 'StretchMode';

    protected $FullName = 'XMP::xmpDM';

    protected $GroupName = 'XMP-xmpDM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmpDM';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Stretch Mode';

    protected $Values = array(
        'Beat Splice' => array(
            'Id' => 'Beat Splice',
            'Label' => 'Beat Splice',
        ),
        'Fixed length' => array(
            'Id' => 'Fixed length',
            'Label' => 'Fixed length',
        ),
        'Hybrid' => array(
            'Id' => 'Hybrid',
            'Label' => 'Hybrid',
        ),
        'Resample' => array(
            'Id' => 'Resample',
            'Label' => 'Resample',
        ),
        'Time-Scale' => array(
            'Id' => 'Time-Scale',
            'Label' => 'Time-Scale',
        ),
    );

}
