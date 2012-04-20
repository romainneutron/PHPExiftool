<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SigmaRaw;

class Focus extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'FOCUS';

    protected $Name = 'Focus';

    protected $FullName = 'SigmaRaw::Properties';

    protected $GroupName = 'SigmaRaw';

    protected $g0 = 'SigmaRaw';

    protected $g1 = 'SigmaRaw';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Focus';

    protected $Values = array(
        'AF' => array(
            'Id' => 'AF',
            'Label' => 'Auto-focus Locked',
        ),
        'M' => array(
            'Id' => 'M',
            'Label' => 'Manual',
        ),
        'NO LOCK' => array(
            'Id' => 'NO LOCK',
            'Label' => 'Auto-focus Didn\'t Lock',
        ),
    );

}
