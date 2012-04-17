<?php

namespace PHPExiftool\Driver\Tag\Sony;

class ViewingMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 47;

    protected $Name = 'ViewingMode';

    protected $FullName = 'Sony::CameraSettings3';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Viewing Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        16 => array(
            'Id' => 16,
            'Label' => 'ViewFinder',
        ),
        33 => array(
            'Id' => 33,
            'Label' => 'Focus Check Live View',
        ),
        34 => array(
            'Id' => 34,
            'Label' => 'Quick AF Live View',
        ),
    );

}
