<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Minolta;

class TopAFStatus extends \PHPExiftool\Driver\Tag
{

    protected $Id = 14;

    protected $Name = 'TopAFStatus';

    protected $FullName = 'Minolta::CameraInfoA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int8s';

    protected $Writable = true;

    protected $Description = 'Top AF Status';

    protected $flag_Permanent = true;

    protected $MaxLength = 2;

}
