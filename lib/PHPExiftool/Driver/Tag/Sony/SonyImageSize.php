<?php

namespace PHPExiftool\Driver\Tag\Sony;

class SonyImageSize extends \PHPExiftool\Driver\Tag
{

    protected $Id = 84;

    protected $Name = 'SonyImageSize';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Sony Image Size';

    protected $flag_Permanent = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Large',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Medium',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Small',
        ),
    );

}
