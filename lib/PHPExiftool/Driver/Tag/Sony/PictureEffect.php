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

class PictureEffect extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8206;

    protected $Name = 'PictureEffect';

    protected $FullName = 'Sony::Main';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Picture Effect';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Toy Camera',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Pop Color',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Posterization',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Posterization B/W',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Retro Photo',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'Soft High Key',
        ),
        7 => array(
            'Id' => 7,
            'Label' => 'Partial Color Red',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Partial Color Green',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'Partial Color Blue',
        ),
        10 => array(
            'Id' => 10,
            'Label' => 'Partial Color Yellow',
        ),
        13 => array(
            'Id' => 13,
            'Label' => 'High Contrast Monochrome',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Toy Camera 2',
        ),
        33 => array(
            'Id' => 33,
            'Label' => 'Soft Focus',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 'Miniature',
        ),
        50 => array(
            'Id' => 50,
            'Label' => 'Miniature 2',
        ),
        51 => array(
            'Id' => 51,
            'Label' => 'Miniature 3',
        ),
        65 => array(
            'Id' => 65,
            'Label' => 'HDR Painting',
        ),
        80 => array(
            'Id' => 80,
            'Label' => 'Rich-tone Monochrome',
        ),
        97 => array(
            'Id' => 97,
            'Label' => 'Water Color',
        ),
        98 => array(
            'Id' => 98,
            'Label' => 'Water Color 2',
        ),
        114 => array(
            'Id' => 114,
            'Label' => 'Illustration',
        ),
    );

}
