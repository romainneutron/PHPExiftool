<?php

namespace PHPExiftool\Driver\Tag\CanonRaw;

class RawJpgQuality extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'RawJpgQuality';

    protected $FullName = 'CanonRaw::RawJpgInfo';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Raw Jpg Quality';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Economy',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Normal',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Fine',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Superfine',
        ),
    );

}
