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

use PHPExiftool\Driver\AbstractTag;

class FocusMode extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'FocusMode';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Focus Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Manual',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'AF-S',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'AF-C',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'AF-A',
        ),
        4 => array(
            'Id' => 1,
            'Label' => 'AF-S',
        ),
        5 => array(
            'Id' => 2,
            'Label' => 'AF-C',
        ),
        6 => array(
            'Id' => 4,
            'Label' => 'Permanent-AF',
        ),
        7 => array(
            'Id' => 65535,
            'Label' => 'n/a',
        ),
        8 => array(
            'Id' => 0,
            'Label' => 'Manual',
        ),
        9 => array(
            'Id' => 2,
            'Label' => 'AF-S',
        ),
        10 => array(
            'Id' => 3,
            'Label' => 'AF-C',
        ),
        11 => array(
            'Id' => 6,
            'Label' => 'Direct Manual Focus',
        ),
        12 => array(
            'Id' => 17,
            'Label' => 'AF-S',
        ),
        13 => array(
            'Id' => 18,
            'Label' => 'AF-C',
        ),
        14 => array(
            'Id' => 19,
            'Label' => 'AF-A',
        ),
        15 => array(
            'Id' => 32,
            'Label' => 'Manual',
        ),
    );

}
