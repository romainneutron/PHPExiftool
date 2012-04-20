<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

class TungstenAWB extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'TungstenAWB';

    protected $FullName = 'Pentax::AWBInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Tungsten AWB';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Subtle Correction',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Strong Correction',
        ),
    );

}
