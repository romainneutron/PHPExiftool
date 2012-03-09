<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class JpgRecordedPixels extends \PHPExiftool\Driver\Tag
{

    protected $Id = '14.1';

    protected $Name = 'JpgRecordedPixels';

    protected $FullName = 'Pentax::CameraSettings';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Jpg Recorded Pixels';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '10 MP',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '6 MP',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '2 MP',
        ),
    );

}
