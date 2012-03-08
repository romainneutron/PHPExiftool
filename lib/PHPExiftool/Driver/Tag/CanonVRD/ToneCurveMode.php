<?php

namespace PHPExiftool\Driver\Tag\CanonVRD;

class ToneCurveMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 275;

    protected $Name = 'ToneCurveMode';

    protected $FullName = 'CanonVRD::Ver1';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Tone Curve Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'RGB',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Luminance',
        ),
    );

}
