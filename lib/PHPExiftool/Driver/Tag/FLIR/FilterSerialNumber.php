<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class FilterSerialNumber extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'FilterSerialNumber';

    protected $FullName = 'mixed';

    protected $GroupName = 'FLIR';

    protected $g0 = 'mixed';

    protected $g1 = 'FLIR';

    protected $g2 = 'mixed';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Filter Serial Number';

    protected $MaxLength = 32;

    protected $local_g2 = 'mixed';
}
