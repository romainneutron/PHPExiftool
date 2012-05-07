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

class FocusStatus extends \PHPExiftool\Driver\Tag
{

    protected $Id = 83;

    protected $Name = 'FocusStatus';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Focus Status';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not confirmed',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Confirmed',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Failed',
        ),
        3 => array(
            'Id' => 4,
            'Label' => 'Not confirmed, Tracking',
        ),
        4 => array(
            'Id' => 0,
            'Label' => 'Not Focused',
        ),
        5 => array(
            'Id' => 1,
            'Label' => 'Confirmed',
        ),
        6 => array(
            'Id' => 4,
            'Label' => 'Tracking',
        ),
    );

}
