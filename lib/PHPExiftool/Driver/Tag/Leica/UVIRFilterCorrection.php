<?php

namespace PHPExiftool\Driver\Tag\Leica;

class UVIRFilterCorrection extends \PHPExiftool\Driver\Tag
{

    protected $Id = 805;

    protected $Name = 'UV-IRFilterCorrection';

    protected $FullName = 'Panasonic::Leica2';

    protected $GroupName = 'Leica';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Leica';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'UV/IR Filter Correction';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not Active',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Active',
        ),
    );

}
