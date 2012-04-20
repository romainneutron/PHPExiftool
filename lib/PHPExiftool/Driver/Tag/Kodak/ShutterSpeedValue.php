<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Kodak;

class ShutterSpeedValue extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'StSV';

    protected $Name = 'ShutterSpeedValue';

    protected $FullName = 'Kodak::Free';

    protected $GroupName = 'Kodak';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Kodak';

    protected $g2 = 'Video';

    protected $Type = 'int16s';

    protected $Writable = false;

    protected $Description = 'Shutter Speed Value';

    protected $flag_Permanent = true;

}
