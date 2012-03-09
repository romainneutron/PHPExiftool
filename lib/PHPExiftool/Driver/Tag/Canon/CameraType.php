<?php

namespace PHPExiftool\Driver\Tag\Canon;

class CameraType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 26;

    protected $Name = 'CameraType';

    protected $FullName = 'Canon::ShotInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Camera Type';

    protected $local_g2 = 'Camera';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'n/a',
        ),
        248 => array(
            'Id' => 248,
            'Label' => 'EOS High-end',
        ),
        250 => array(
            'Id' => 250,
            'Label' => 'Compact',
        ),
        252 => array(
            'Id' => 252,
            'Label' => 'EOS Mid-range',
        ),
        255 => array(
            'Id' => 255,
            'Label' => 'DV Camera',
        ),
    );

}
