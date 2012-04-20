<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SR2DataIFD;

class ColorMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 30576;

    protected $Name = 'ColorMode';

    protected $FullName = 'Sony::SR2DataIFD';

    protected $GroupName = 'SR2DataIFD';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'SR2DataIFD';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Color Mode';

    protected $flag_Permanent = true;

}
