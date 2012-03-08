<?php

namespace PHPExiftool\Driver\Tag\Sony;

class VignettingCorrection extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8209;

    protected $Name = 'VignettingCorrection';

    protected $FullName = 'Sony::Main';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Vignetting Correction';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Auto',
        ),
    );

}
