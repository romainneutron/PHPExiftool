<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Kodak;

class PreviewImageHeight extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'PreviewImageHeight';

    protected $FullName = 'Kodak::Scrn';

    protected $GroupName = 'Kodak';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Kodak';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Preview Image Height';

    protected $flag_Permanent = true;

}
