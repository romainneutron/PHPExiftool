<?php

namespace PHPExiftool\Driver\Tag\AVI1;

class InterleavedField extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'InterleavedField';

    protected $FullName = 'JPEG::AVI1';

    protected $GroupName = 'AVI1';

    protected $g0 = 'APP0';

    protected $g1 = 'AVI1';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Interleaved Field';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Not Interleaved',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Odd',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Even',
        ),
    );

}
