<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Panasonic;

class Model extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4;

    protected $Name = 'Model';

    protected $FullName = 'Panasonic::PANA';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Camera Model Name';

    protected $flag_Permanent = true;

    protected $MaxLength = 16;

}
