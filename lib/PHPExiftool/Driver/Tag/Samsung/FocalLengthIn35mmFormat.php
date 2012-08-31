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

use PHPExiftool\Driver\AbstractTag;

class FocalLengthIn35mmFormat extends AbstractTag
{

    protected $Id = 40986;

    protected $Name = 'FocalLengthIn35mmFormat';

    protected $FullName = 'Samsung::Type2';

    protected $GroupName = 'Samsung';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Samsung';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Focal Length In 35mm Format';

    protected $local_g2 = 'Camera';

    protected $flag_Permanent = true;

}
