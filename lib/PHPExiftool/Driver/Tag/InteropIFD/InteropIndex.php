<?php

namespace PHPExiftool\Driver\Tag\InteropIFD;

class InteropIndex extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'InteropIndex';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'InteropIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Interoperability Index';

    protected $local_g1 = 'InteropIFD';

    protected $Values = array(
        'R03' => array(
            'Id' => 'R03',
            'Label' => 'R03 - DCF option file (Adobe RGB)',
        ),
        'R98' => array(
            'Id' => 'R98',
            'Label' => 'R98 - DCF basic file (sRGB)',
        ),
        'THM' => array(
            'Id' => 'THM',
            'Label' => 'THM - DCF thumbnail file',
        ),
    );

}
