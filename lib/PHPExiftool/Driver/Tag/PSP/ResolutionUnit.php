<?php

namespace PHPExiftool\Driver\Tag\PSP;

class ResolutionUnit extends \PHPExiftool\Driver\Tag
{

    protected $Id = 16;

    protected $Name = 'ResolutionUnit';

    protected $FullName = 'PSP::Image';

    protected $GroupName = 'PSP';

    protected $g0 = 'PSP';

    protected $g1 = 'PSP';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Resolution Unit';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'inches',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'cm',
        ),
    );

}
