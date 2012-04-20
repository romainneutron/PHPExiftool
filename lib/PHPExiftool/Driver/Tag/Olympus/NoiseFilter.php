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

class NoiseFilter extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1319;

    protected $Name = 'NoiseFilter';

    protected $FullName = 'Olympus::CameraSettings';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Noise Filter';

    protected $flag_Permanent = true;

    protected $Values = array(
        '-1 -2 1' => array(
            'Id' => '-1 -2 1',
            'Label' => 'Low',
        ),
        '-2 -2 1' => array(
            'Id' => '-2 -2 1',
            'Label' => 'Off',
        ),
        '0 -2 1' => array(
            'Id' => '0 -2 1',
            'Label' => 'Standard',
        ),
        '1 -2 1' => array(
            'Id' => '1 -2 1',
            'Label' => 'High',
        ),
    );

}
