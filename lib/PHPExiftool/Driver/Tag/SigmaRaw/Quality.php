<?php

namespace PHPExiftool\Driver\Tag\SigmaRaw;

class Quality extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'RESOLUTION';

    protected $Name = 'Quality';

    protected $FullName = 'SigmaRaw::Properties';

    protected $GroupName = 'SigmaRaw';

    protected $g0 = 'SigmaRaw';

    protected $g1 = 'SigmaRaw';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Quality';

    protected $Values = array(
        'HI' => array(
            'Id' => 'HI',
            'Label' => 'High',
        ),
        'LOW' => array(
            'Id' => 'LOW',
            'Label' => 'Low',
        ),
        'MED' => array(
            'Id' => 'MED',
            'Label' => 'Medium',
        ),
    );

}
