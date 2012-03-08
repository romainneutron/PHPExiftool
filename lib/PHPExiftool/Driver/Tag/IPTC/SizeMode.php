<?php

namespace PHPExiftool\Driver\Tag\IPTC;

class SizeMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 10;

    protected $Name = 'SizeMode';

    protected $FullName = 'IPTC::PreObjectData';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Other';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Size Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Size Not Known',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Size Known',
        ),
    );

}
