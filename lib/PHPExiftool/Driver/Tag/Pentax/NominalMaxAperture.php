<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class NominalMaxAperture extends \PHPExiftool\Driver\Tag
{

    protected $Id = 10;

    protected $Name = 'NominalMaxAperture';

    protected $FullName = 'Pentax::LensData';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Nominal Max Aperture';

    protected $flag_Permanent = true;

}
