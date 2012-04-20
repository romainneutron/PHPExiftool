<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

class WBShiftMG extends \PHPExiftool\Driver\Tag
{

    protected $Id = 17;

    protected $Name = 'WBShiftMG';

    protected $FullName = 'Pentax::ColorInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Image';

    protected $Type = 'int8s';

    protected $Writable = true;

    protected $Description = 'WB Shift MG';

    protected $flag_Permanent = true;

}
