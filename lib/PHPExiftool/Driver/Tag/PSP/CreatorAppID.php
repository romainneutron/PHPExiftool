<?php

namespace PHPExiftool\Driver\Tag\PSP;

class CreatorAppID extends \PHPExiftool\Driver\Tag
{

    protected $Id = 6;

    protected $Name = 'CreatorAppID';

    protected $FullName = 'PSP::Creator';

    protected $GroupName = 'PSP';

    protected $g0 = 'PSP';

    protected $g1 = 'PSP';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Creator App ID';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unknown',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Paint Shop Pro',
        ),
    );

}
