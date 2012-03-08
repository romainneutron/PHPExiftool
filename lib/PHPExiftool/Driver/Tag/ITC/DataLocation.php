<?php

namespace PHPExiftool\Driver\Tag\ITC;

class DataLocation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4;

    protected $Name = 'DataLocation';

    protected $FullName = 'ITC::Item';

    protected $GroupName = 'ITC';

    protected $g0 = 'ITC';

    protected $g1 = 'ITC';

    protected $g2 = 'Image';

    protected $Type = 'undef';

    protected $Writable = false;

    protected $Description = 'Data Location';

    protected $Values = array(
        'down' => array(
            'Id' => 'down',
            'Label' => 'Downloaded Separately',
        ),
        'locl' => array(
            'Id' => 'locl',
            'Label' => 'Local Music File',
        ),
    );

}
