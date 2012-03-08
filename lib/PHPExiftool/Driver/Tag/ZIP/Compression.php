<?php

namespace PHPExiftool\Driver\Tag\ZIP;

class Compression extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'Compression';

    protected $FullName = 'ZIP::GZIP';

    protected $GroupName = 'ZIP';

    protected $g0 = 'ZIP';

    protected $g1 = 'ZIP';

    protected $g2 = 'Other';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Compression';

    protected $Values = array(
        8 => array(
            'Id' => 8,
            'Label' => 'Deflated',
        ),
    );

}
