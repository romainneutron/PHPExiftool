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

class DateTime1 extends \PHPExiftool\Driver\Tag
{

    protected $Id = 131;

    protected $Name = 'DateTime1';

    protected $FullName = 'Olympus::AVI';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Date Time 1';

    protected $local_g2 = 'Time';

    protected $flag_Permanent = true;

    protected $MaxLength = 24;

}
