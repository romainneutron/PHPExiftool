<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\IFD0;

use PHPExiftool\Driver\AbstractTag;

class PixelScale extends AbstractTag
{

    protected $Id = 33550;

    protected $Name = 'PixelScale';

    protected $FullName = 'ModelPixelScaleTag';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'Double';

    protected $Writable = false;

    protected $Description = 'This tag may be used to specify the size of raster pixel spacing in the model space units, when the raster space can be embedded in the model space coordinate system without rotation';

}
