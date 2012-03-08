<?php

namespace PHPExiftool\Driver\Tag\FlashPix;

class ExtensionPersistence extends \PHPExiftool\Driver\Tag
{

    protected $Id = 3;

    protected $Name = 'ExtensionPersistence';

    protected $FullName = 'FlashPix::Extensions';

    protected $GroupName = 'FlashPix';

    protected $g0 = 'FlashPix';

    protected $g1 = 'FlashPix';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Extension Persistence';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Always Valid',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Invalidated By Modification',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Potentially Invalidated By Modification',
        ),
    );

}
