<?php

namespace PHPExiftool\Driver\Tag\XMPPrism;

class OriginPlatform extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'originPlatform';

    protected $Name = 'OriginPlatform';

    protected $FullName = 'XMP::prism';

    protected $GroupName = 'XMP-prism';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-prism';

    protected $g2 = 'Document';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Origin Platform';

    protected $Values = array(
        'broadcast' => array(
            'Id' => 'broadcast',
            'Label' => 'Broadcast',
        ),
        'email' => array(
            'Id' => 'email',
            'Label' => 'E-Mail',
        ),
        'mobile' => array(
            'Id' => 'mobile',
            'Label' => 'Mobile',
        ),
        'other' => array(
            'Id' => 'other',
            'Label' => 'Other',
        ),
        'print' => array(
            'Id' => 'print',
            'Label' => 'Print',
        ),
        'recordableMedia' => array(
            'Id' => 'recordableMedia',
            'Label' => 'Recordable Media',
        ),
        'web' => array(
            'Id' => 'web',
            'Label' => 'Web',
        ),
    );

}
