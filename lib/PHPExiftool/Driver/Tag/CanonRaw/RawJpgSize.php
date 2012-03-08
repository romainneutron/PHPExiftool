<?php

namespace PHPExiftool\Driver\Tag\CanonRaw;

class RawJpgSize extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'RawJpgSize';

    protected $FullName = 'CanonRaw::RawJpgInfo';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Raw Jpg Size';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Large',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Medium',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Small',
        ),
    );

}
