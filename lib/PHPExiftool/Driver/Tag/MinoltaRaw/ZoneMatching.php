<?php

namespace PHPExiftool\Driver\Tag\MinoltaRaw;

class ZoneMatching extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'ZoneMatching';

    protected $FullName = 'MinoltaRaw::RIF';

    protected $GroupName = 'MinoltaRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'MinoltaRaw';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

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
