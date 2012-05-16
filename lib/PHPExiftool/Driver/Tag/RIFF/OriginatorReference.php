<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\RIFF;

class OriginatorReference extends \PHPExiftool\Driver\Tag
{

    protected $Id = 288;

    protected $Name = 'OriginatorReference';

    protected $FullName = 'RIFF::BroadcastExt';

    protected $GroupName = 'RIFF';

    protected $g0 = 'RIFF';

    protected $g1 = 'RIFF';

    protected $g2 = 'Audio';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Originator Reference';

    protected $MaxLength = 32;

}
