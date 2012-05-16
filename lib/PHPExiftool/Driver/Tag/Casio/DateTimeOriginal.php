<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Casio;

class DateTimeOriginal extends \PHPExiftool\Driver\Tag
{

    protected $Id = 77;

    protected $Name = 'DateTimeOriginal';

    protected $FullName = 'Casio::QVCI';

    protected $GroupName = 'Casio';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Casio';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Date/Time Original';

    protected $local_g2 = 'Time';

    protected $flag_Permanent = true;

    protected $MaxLength = 20;

}
