<?php

namespace PHPExiftool\Driver\Tag\IPTC;

class ObjectCycle extends \PHPExiftool\Driver\Tag
{

    protected $Id = 75;

    protected $Name = 'ObjectCycle';

    protected $FullName = 'IPTC::ApplicationRecord';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Other';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Object Cycle';

    protected $Values = array(
        'a' => array(
            'Id' => 'a',
            'Label' => 'Morning',
        ),
        'b' => array(
            'Id' => 'b',
            'Label' => 'Both Morning and Evening',
        ),
        'p' => array(
            'Id' => 'p',
            'Label' => 'Evening',
        ),
    );

}
