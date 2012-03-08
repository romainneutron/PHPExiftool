<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class ZoneMatching extends \PHPExiftool\Driver\Tag
{

    protected $Id = 266;

    protected $Name = 'ZoneMatching';

    protected $FullName = 'Minolta::Main';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Zone Matching';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'ISO Setting Used',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'High Key',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Low Key',
        ),
    );

}
