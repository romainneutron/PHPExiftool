<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\PostScript;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Title extends AbstractTag
{

    protected $Id = 'Title';

    protected $Name = 'Title';

    protected $FullName = 'PostScript::Main';

    protected $GroupName = 'PostScript';

    protected $g0 = 'PostScript';

    protected $g1 = 'PostScript';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Title';
}
