<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ID3v22;

class ITunesU extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ITU';

    protected $Name = 'iTunesU';

    protected $FullName = 'ID3::v2_2';

    protected $GroupName = 'ID3v2_2';

    protected $g0 = 'ID3';

    protected $g1 = 'ID3v2_2';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'iTunes U';

    protected $flag_Binary = true;

}
