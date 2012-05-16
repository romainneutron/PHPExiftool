<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Ricoh;

class FirmwareRevision extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'FirmwareRevision';

    protected $FullName = 'Ricoh::FirmwareInfo';

    protected $GroupName = 'Ricoh';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Ricoh';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Firmware Revision';

    protected $flag_Permanent = true;

    protected $MaxLength = 12;

}
