<?php

namespace PHPExiftool\Driver\Tag\XMPCrs;

class ToneCurveName extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ToneCurveName';

    protected $Name = 'ToneCurveName';

    protected $FullName = 'XMP::crs';

    protected $GroupName = 'XMP-crs';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-crs';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Tone Curve Name';

    protected $Values = array(
        'Custom' => array(
            'Id' => 'Custom',
            'Label' => 'Custom',
        ),
        'Linear' => array(
            'Id' => 'Linear',
            'Label' => 'Linear',
        ),
        'Medium Contrast' => array(
            'Id' => 'Medium Contrast',
            'Label' => 'Medium Contrast',
        ),
        'Strong Contrast' => array(
            'Id' => 'Strong Contrast',
            'Label' => 'Strong Contrast',
        ),
    );

}
