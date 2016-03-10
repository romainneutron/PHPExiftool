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

class ModelTiePoint extends AbstractTag
{

    protected $Id = 33922;

    protected $Name = 'ModelTiePoint';

    protected $FullName = 'ModelTiepointTag';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'Double';

    protected $Writable = false;

    protected $Description = 'This tag stores raster->model tiepoint pairs';

}
