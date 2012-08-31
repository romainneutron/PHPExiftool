<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Olympus;

use PHPExiftool\Driver\AbstractTag;

class Extender extends AbstractTag
{

    protected $Id = 769;

    protected $Name = 'Extender';

    protected $FullName = 'Olympus::Equipment';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Extender';

    protected $flag_Permanent = true;

    protected $Values = array(
        '0 0' => array(
            'Id' => '0 0',
            'Label' => 'None',
        ),
        '0 4' => array(
            'Id' => '0 4',
            'Label' => 'Olympus Zuiko Digital EC-14 1.4x Teleconverter',
        ),
        '0 8' => array(
            'Id' => '0 8',
            'Label' => 'Olympus EX-25 Extension Tube',
        ),
        '0 16' => array(
            'Id' => '0 16',
            'Label' => 'Olympus Zuiko Digital EC-20 2.0x Teleconverter',
        ),
    );

}
