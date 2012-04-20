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

class RawDevPictureMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 268;

    protected $Name = 'RawDevPictureMode';

    protected $FullName = 'Olympus::RawDevelopment2';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Raw Dev Picture Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Vivid',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Natural',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Muted',
        ),
        256 => array(
            'Id' => 256,
            'Label' => 'Monotone',
        ),
        512 => array(
            'Id' => 512,
            'Label' => 'Sepia',
        ),
    );

}
