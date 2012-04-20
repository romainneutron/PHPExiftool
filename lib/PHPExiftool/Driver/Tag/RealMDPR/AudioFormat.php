<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\RealMDPR;

class AudioFormat extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Audio Format';

    protected $Name = 'AudioFormat';

    protected $FullName = 'Real::FileInfo';

    protected $GroupName = 'Real-MDPR';

    protected $g0 = 'Real';

    protected $g1 = 'Real-MDPR';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Audio Format';

}
