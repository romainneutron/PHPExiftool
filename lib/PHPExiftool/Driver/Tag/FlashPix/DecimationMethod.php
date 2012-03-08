<?php

namespace PHPExiftool\Driver\Tag\FlashPix;

class DecimationMethod extends \PHPExiftool\Driver\Tag
{

    protected $Id = 33554436;

    protected $Name = 'DecimationMethod';

    protected $FullName = 'FlashPix::Image';

    protected $GroupName = 'FlashPix';

    protected $g0 = 'FlashPix';

    protected $g1 = 'FlashPix';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Decimation Method';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None (Full-sized Image)',
        ),
        8 => array(
            'Id' => 8,
            'Label' => '8-point Prefilter',
        ),
    );

}
