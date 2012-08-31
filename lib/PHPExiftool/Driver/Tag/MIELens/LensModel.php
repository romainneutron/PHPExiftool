<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MIELens;

use PHPExiftool\Driver\AbstractTag;

class LensModel extends AbstractTag
{

    protected $Id = 'Model';

    protected $Name = 'LensModel';

    protected $FullName = 'MIE::Lens';

    protected $GroupName = 'MIE-Lens';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-Lens';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Lens Model';

}
