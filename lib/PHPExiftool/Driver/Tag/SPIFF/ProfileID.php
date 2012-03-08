<?php

namespace PHPExiftool\Driver\Tag\SPIFF;

class ProfileID extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'ProfileID';

    protected $FullName = 'JPEG::SPIFF';

    protected $GroupName = 'SPIFF';

    protected $g0 = 'APP8';

    protected $g1 = 'SPIFF';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Profile ID';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not Specified',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Continuous-tone Base',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Continuous-tone Progressive',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Bi-level Facsimile',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Continuous-tone Facsimile',
        ),
    );

}
