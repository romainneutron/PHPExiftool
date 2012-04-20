<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MNG;

class Filter extends \PHPExiftool\Driver\Tag
{

    protected $Id = 11;

    protected $Name = 'Filter';

    protected $FullName = 'MNG::BasisObject';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Filter';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Adaptive',
        ),
    );

}
