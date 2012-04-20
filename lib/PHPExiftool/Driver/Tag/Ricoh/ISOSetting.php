<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Ricoh;

class ISOSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 39;

    protected $Name = 'ISOSetting';

    protected $FullName = 'Ricoh::ImageInfo';

    protected $GroupName = 'Ricoh';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Ricoh';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'ISO Setting';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 64,
        ),
        2 => array(
            'Id' => 2,
            'Label' => 100,
        ),
        4 => array(
            'Id' => 4,
            'Label' => 200,
        ),
        6 => array(
            'Id' => 6,
            'Label' => 400,
        ),
        7 => array(
            'Id' => 7,
            'Label' => 800,
        ),
        8 => array(
            'Id' => 8,
            'Label' => 1600,
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Auto',
        ),
    );

}
