<?php

namespace PHPExiftool\Driver\Tag\Jpeg2000;

class MajorBrand extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'MajorBrand';

    protected $FullName = 'Jpeg2000::FileType';

    protected $GroupName = 'Jpeg2000';

    protected $g0 = 'Jpeg2000';

    protected $g1 = 'Jpeg2000';

    protected $g2 = 'Video';

    protected $Type = 'undef';

    protected $Writable = false;

    protected $Description = 'Major Brand';

    protected $Values = array(
        'jp2 ' => array(
            'Id' => 'jp2 ',
            'Label' => 'JPEG 2000 Image (.JP2)',
        ),
        'jpm ' => array(
            'Id' => 'jpm ',
            'Label' => 'JPEG 2000 Compound Image (.JPM)',
        ),
        'jpx ' => array(
            'Id' => 'jpx ',
            'Label' => 'JPEG 2000 with extensions (.JPX)',
        ),
    );

}
