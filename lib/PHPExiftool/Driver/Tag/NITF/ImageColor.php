<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NITF;

use PHPExiftool\Driver\AbstractTag;

class ImageColor extends AbstractTag
{

    protected $Id = 7;

    protected $Name = 'ImageColor';

    protected $FullName = 'JPEG::NITF';

    protected $GroupName = 'NITF';

    protected $g0 = 'APP6';

    protected $g1 = 'NITF';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Image Color';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Monochrome',
        ),
    );

}
