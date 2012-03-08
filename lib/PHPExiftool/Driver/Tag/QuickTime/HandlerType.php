<?php

namespace PHPExiftool\Driver\Tag\QuickTime;

class HandlerType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8;

    protected $Name = 'HandlerType';

    protected $FullName = 'QuickTime::Handler';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Video';

    protected $Type = 'undef';

    protected $Writable = false;

    protected $Description = 'Handler Type';

    protected $Values = array(
        'alis' => array(
            'Id' => 'alis',
            'Label' => 'Alias Data',
        ),
        'crsm' => array(
            'Id' => 'crsm',
            'Label' => 'Clock Reference',
        ),
        'hint' => array(
            'Id' => 'hint',
            'Label' => 'Hint Track',
        ),
        'ipsm' => array(
            'Id' => 'ipsm',
            'Label' => 'IPMP',
        ),
        'm7sm' => array(
            'Id' => 'm7sm',
            'Label' => 'MPEG-7 Stream',
        ),
        'mdir' => array(
            'Id' => 'mdir',
            'Label' => 'Metadata',
        ),
        'mdta' => array(
            'Id' => 'mdta',
            'Label' => 'Metadata Tags',
        ),
        'mjsm' => array(
            'Id' => 'mjsm',
            'Label' => 'MPEG-J',
        ),
        'ocsm' => array(
            'Id' => 'ocsm',
            'Label' => 'Object Content',
        ),
        'odsm' => array(
            'Id' => 'odsm',
            'Label' => 'Object Descriptor',
        ),
        'sdsm' => array(
            'Id' => 'sdsm',
            'Label' => 'Scene Description',
        ),
        'soun' => array(
            'Id' => 'soun',
            'Label' => 'Audio Track',
        ),
        'text' => array(
            'Id' => 'text',
            'Label' => 'Text',
        ),
        'url ' => array(
            'Id' => 'url ',
            'Label' => 'URL',
        ),
        'vide' => array(
            'Id' => 'vide',
            'Label' => 'Video Track',
        ),
    );

}
