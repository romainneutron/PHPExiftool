<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

class OutputResolution extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4;

    protected $Name = 'OutputResolution';

    protected $FullName = 'Nikon::CaptureOutput';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Output Resolution';

    protected $flag_Permanent = true;

}
