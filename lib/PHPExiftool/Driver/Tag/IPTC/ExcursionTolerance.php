<?php

namespace PHPExiftool\Driver\Tag\IPTC;

class ExcursionTolerance extends \PHPExiftool\Driver\Tag
{

    protected $Id = 130;

    protected $Name = 'ExcursionTolerance';

    protected $FullName = 'IPTC::NewsPhoto';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Excursion Tolerance';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not Allowed',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Allowed',
        ),
    );

}
