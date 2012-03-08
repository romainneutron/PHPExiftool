<?php

namespace PHPExiftool\Driver\Tag\XMPXmpDM;

class AudioSampleType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'audioSampleType';

    protected $Name = 'AudioSampleType';

    protected $FullName = 'XMP::xmpDM';

    protected $GroupName = 'XMP-xmpDM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmpDM';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Audio Sample Type';

    protected $Values = array(
        '16Int' => array(
            'Id' => '16Int',
            'Label' => '16-bit integer',
        ),
        '24Int' => array(
            'Id' => '24Int',
            'Label' => '24-bit integer',
        ),
        '32Float' => array(
            'Id' => '32Float',
            'Label' => '32-bit float',
        ),
        '32Int' => array(
            'Id' => '32Int',
            'Label' => '32-bit integer',
        ),
        '8Int' => array(
            'Id' => '8Int',
            'Label' => '8-bit integer',
        ),
        'Compressed' => array(
            'Id' => 'Compressed',
            'Label' => 'Compressed',
        ),
        'Other' => array(
            'Id' => 'Other',
            'Label' => 'Other',
        ),
        'Packed' => array(
            'Id' => 'Packed',
            'Label' => 'Packed',
        ),
    );

}
