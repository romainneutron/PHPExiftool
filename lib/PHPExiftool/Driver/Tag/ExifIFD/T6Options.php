<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ExifIFD;

class T6Options extends \PHPExiftool\Driver\Tag
{

    protected $Id = 293;

    protected $Name = 'T6Options';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'T6 Options';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        2 => array(
            'Id' => 2,
            'Label' => 'Uncompressed',
        ),
    );

}
