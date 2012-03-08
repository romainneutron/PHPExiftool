<?php

namespace PHPExiftool\Driver\Tag\CanonVRD;

class MonochromeFilterEffect extends \PHPExiftool\Driver\Tag
{

    protected $Id = 58;

    protected $Name = 'MonochromeFilterEffect';

    protected $FullName = 'CanonVRD::Ver2';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Monochrome Filter Effect';

    protected $Values = array(
        '-2' => array(
            'Id' => '-2',
            'Label' => 'None',
        ),
        '-1' => array(
            'Id' => '-1',
            'Label' => 'Yellow',
        ),
        0 => array(
            'Id' => 0,
            'Label' => 'Orange',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Red',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Green',
        ),
    );

}
