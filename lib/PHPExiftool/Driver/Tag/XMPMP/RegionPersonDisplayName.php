<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPMP;

class RegionPersonDisplayName extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'RegionInfoRegionsPersonDisplayName';

    protected $Name = 'RegionPersonDisplayName';

    protected $FullName = 'Microsoft::MP';

    protected $GroupName = 'XMP-MP';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-MP';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Region Person Display Name';

}
