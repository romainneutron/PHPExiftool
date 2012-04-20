<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\HP;

class MaxAperture extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12;

    protected $Name = 'MaxAperture';

    protected $FullName = 'HP::Type4';

    protected $GroupName = 'HP';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'HP';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Max Aperture';

    protected $flag_Permanent = true;

}
