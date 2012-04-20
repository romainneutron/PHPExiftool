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

class ColorSpace extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'ColorSpace';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Color Space';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 5,
            'Label' => 'Adobe RGB',
        ),
        1 => array(
            'Id' => 6,
            'Label' => 'sRGB',
        ),
        2 => array(
            'Id' => 1,
            'Label' => 'sRGB',
        ),
        3 => array(
            'Id' => 2,
            'Label' => 'AdobeRGB',
        ),
    );

}
