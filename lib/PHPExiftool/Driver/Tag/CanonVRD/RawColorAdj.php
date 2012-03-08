<?php

namespace PHPExiftool\Driver\Tag\CanonVRD;

class RawColorAdj extends \PHPExiftool\Driver\Tag
{

    protected $Id = 46;

    protected $Name = 'RawColorAdj';

    protected $FullName = 'CanonVRD::Ver1';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Raw Color Adj';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Shot Settings',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Faithful',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Custom',
        ),
    );

}
