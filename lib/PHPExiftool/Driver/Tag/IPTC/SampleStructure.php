<?php

namespace PHPExiftool\Driver\Tag\IPTC;

class SampleStructure extends \PHPExiftool\Driver\Tag
{

    protected $Id = 90;

    protected $Name = 'SampleStructure';

    protected $FullName = 'IPTC::NewsPhoto';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Sample Structure';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'OrthogonalConstangSampling',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Orthogonal4-2-2Sampling',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'CompressionDependent',
        ),
    );

}
