<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Samsung;

class Model extends \PHPExiftool\Driver\Tag
{

    protected $Id = 24;

    protected $Name = 'Model';

    protected $FullName = 'Samsung::MP4';

    protected $GroupName = 'Samsung';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Samsung';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Camera Model Name';

    protected $flag_Permanent = true;

    protected $MaxLength = 16;

}
