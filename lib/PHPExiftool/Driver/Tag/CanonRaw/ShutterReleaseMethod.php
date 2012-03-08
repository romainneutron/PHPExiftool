<?php

namespace PHPExiftool\Driver\Tag\CanonRaw;

class ShutterReleaseMethod extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4112;

    protected $Name = 'ShutterReleaseMethod';

    protected $FullName = 'CanonRaw::Main';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Shutter Release Method';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Single Shot',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Continuous Shooting',
        ),
    );

}
