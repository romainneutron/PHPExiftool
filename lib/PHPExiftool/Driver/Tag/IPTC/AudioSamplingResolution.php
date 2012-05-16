<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\IPTC;

class AudioSamplingResolution extends \PHPExiftool\Driver\Tag
{

    protected $Id = 152;

    protected $Name = 'AudioSamplingResolution';

    protected $FullName = 'IPTC::ApplicationRecord';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Other';

    protected $Type = 'digits';

    protected $Writable = true;

    protected $Description = 'Audio Sampling Resolution';

    protected $MaxLength = 2;

}
