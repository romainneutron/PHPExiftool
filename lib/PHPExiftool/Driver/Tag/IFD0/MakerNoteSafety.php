<?php

namespace PHPExiftool\Driver\Tag\IFD0;

class MakerNoteSafety extends \PHPExiftool\Driver\Tag
{

    protected $Id = 50741;

    protected $Name = 'MakerNoteSafety';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Maker Note Safety';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unsafe',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Safe',
        ),
    );

}
