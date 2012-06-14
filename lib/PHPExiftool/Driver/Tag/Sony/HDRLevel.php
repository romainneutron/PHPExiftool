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

class HDRLevel extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'HDRLevel';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'HDR Level';

    protected $flag_Permanent = true;

    protected $Values = array(
        33 => array(
            'Id' => 33,
            'Label' => '1 EV',
        ),
        35 => array(
            'Id' => 35,
            'Label' => '2 EV',
        ),
        37 => array(
            'Id' => 37,
            'Label' => '3 EV',
        ),
        39 => array(
            'Id' => 39,
            'Label' => '4 EV',
        ),
        40 => array(
            'Id' => 40,
            'Label' => '5 EV',
        ),
        41 => array(
            'Id' => 41,
            'Label' => '6 EV',
        ),
    );

}
