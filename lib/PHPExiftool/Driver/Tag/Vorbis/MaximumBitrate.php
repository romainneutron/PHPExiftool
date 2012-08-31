<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Vorbis;

use PHPExiftool\Driver\AbstractTag;

class MaximumBitrate extends AbstractTag
{

    protected $Id = 9;

    protected $Name = 'MaximumBitrate';

    protected $FullName = 'Vorbis::Identification';

    protected $GroupName = 'Vorbis';

    protected $g0 = 'Vorbis';

    protected $g1 = 'Vorbis';

    protected $g2 = 'Audio';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Maximum Bitrate';

}
