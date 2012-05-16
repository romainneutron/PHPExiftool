<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ICCMeas;

class MeasurementBacking extends \PHPExiftool\Driver\Tag
{

    protected $Id = 12;

    protected $Name = 'MeasurementBacking';

    protected $FullName = 'ICC_Profile::Measurement';

    protected $GroupName = 'ICC-meas';

    protected $g0 = 'ICC_Profile';

    protected $g1 = 'ICC-meas';

    protected $g2 = 'Image';

    protected $Type = 'fixed32s';

    protected $Writable = false;

    protected $Description = 'Measurement Backing';

    protected $MaxLength = 3;

}
