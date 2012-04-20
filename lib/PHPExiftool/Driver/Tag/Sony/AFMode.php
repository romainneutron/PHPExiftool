<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sony;

class AFMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 45123;

    protected $Name = 'AFMode';

    protected $FullName = 'Sony::Main';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'AF Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Default',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Multi AF',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Center AF',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Spot AF',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Flexible Spot AF',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Touch AF',
        ),
        14 => array(
            'Id' => 14,
            'Label' => 'Manual Focus',
        ),
        15 => array(
            'Id' => 15,
            'Label' => 'Face Detected',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'n/a',
        ),
    );

}
