<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

class AudioSampleRate extends \PHPExiftool\Driver\Tag
{

    protected $Id = 110;

    protected $Name = 'AudioSampleRate';

    protected $FullName = 'Canon::MovieInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Video';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Audio Sample Rate';

    protected $local_g2 = 'Audio';

    protected $flag_Permanent = true;

}
