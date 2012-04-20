<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MIFF;

class BorderColor extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'border-color';

    protected $Name = 'BorderColor';

    protected $FullName = 'MIFF::Main';

    protected $GroupName = 'MIFF';

    protected $g0 = 'MIFF';

    protected $g1 = 'MIFF';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Border Color';

}
