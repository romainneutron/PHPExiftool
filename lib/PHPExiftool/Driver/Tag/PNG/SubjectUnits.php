<?php

namespace PHPExiftool\Driver\Tag\PNG;

class SubjectUnits extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'SubjectUnits';

    protected $FullName = 'PNG::SubjectScale';

    protected $GroupName = 'PNG';

    protected $g0 = 'PNG';

    protected $g1 = 'PNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Subject Units';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Meters',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Radians',
        ),
    );

}
