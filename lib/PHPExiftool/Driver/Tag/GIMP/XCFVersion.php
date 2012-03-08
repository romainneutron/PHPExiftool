<?php

namespace PHPExiftool\Driver\Tag\GIMP;

class XCFVersion extends \PHPExiftool\Driver\Tag
{

    protected $Id = 9;

    protected $Name = 'XCFVersion';

    protected $FullName = 'GIMP::Header';

    protected $GroupName = 'GIMP';

    protected $g0 = 'GIMP';

    protected $g1 = 'GIMP';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'XCF Version';

    protected $Values = array(
        'file' => array(
            'Id' => 'file',
            'Label' => 0,
        ),
        'v001' => array(
            'Id' => 'v001',
            'Label' => 1,
        ),
        'v002' => array(
            'Id' => 'v002',
            'Label' => 2,
        ),
    );

}
