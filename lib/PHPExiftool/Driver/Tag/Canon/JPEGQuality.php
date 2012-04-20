<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

class JPEGQuality extends \PHPExiftool\Driver\Tag
{

    protected $Id = 102;

    protected $Name = 'JPEGQuality';

    protected $FullName = 'Canon::CameraInfo1DmkII';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'JPEG Quality';

    protected $flag_Permanent = true;

}
