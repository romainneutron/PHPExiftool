<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
