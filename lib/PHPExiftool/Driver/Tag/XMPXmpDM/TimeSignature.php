<?php

namespace PHPExiftool\Driver\Tag\XMPXmpDM;

class TimeSignature extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'timeSignature';

    protected $Name = 'TimeSignature';

    protected $FullName = 'XMP::xmpDM';

    protected $GroupName = 'XMP-xmpDM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmpDM';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Time Signature';

    protected $Values = array(
        '12/8' => array(
            'Id' => '12/8',
            'Label' => '12/8',
        ),
        '2/4' => array(
            'Id' => '2/4',
            'Label' => '2/4',
        ),
        '3/4' => array(
            'Id' => '3/4',
            'Label' => '3/4',
        ),
        '4/4' => array(
            'Id' => '4/4',
            'Label' => '4/4',
        ),
        '5/4' => array(
            'Id' => '5/4',
            'Label' => '5/4',
        ),
        '6/8' => array(
            'Id' => '6/8',
            'Label' => '6/8',
        ),
        '7/4' => array(
            'Id' => '7/4',
            'Label' => '7/4',
        ),
        '9/8' => array(
            'Id' => '9/8',
            'Label' => '9/8',
        ),
        'other' => array(
            'Id' => 'other',
            'Label' => 'other',
        ),
    );

}
