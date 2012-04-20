<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Olympus;

class ExposureUnknown extends \PHPExiftool\Driver\Tag
{

    protected $Id = 38;

    protected $Name = 'ExposureUnknown';

    protected $FullName = 'Olympus::MOV1';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Exposure Unknown';

    protected $flag_Permanent = true;

}
