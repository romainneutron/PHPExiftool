<?php

namespace PHPExiftool\Driver\Tag\Matroska;

class ContentSignatureAlgorithm extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2021;

    protected $Name = 'ContentSignatureAlgorithm';

    protected $FullName = 'Matroska::Main';

    protected $GroupName = 'Matroska';

    protected $g0 = 'Matroska';

    protected $g1 = 'Matroska';

    protected $g2 = 'Video';

    protected $Type = 'unsigned';

    protected $Writable = false;

    protected $Description = 'Content Signature Algorithm';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not Signed',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'RSA',
        ),
    );

}
