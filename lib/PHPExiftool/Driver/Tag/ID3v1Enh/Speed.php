<?php

namespace PHPExiftool\Driver\Tag\ID3v1Enh;

class Speed extends \PHPExiftool\Driver\Tag
{

    protected $Id = 184;

    protected $Name = 'Speed';

    protected $FullName = 'ID3::v1_Enh';

    protected $GroupName = 'ID3v1_Enh';

    protected $g0 = 'ID3';

    protected $g1 = 'ID3v1_Enh';

    protected $g2 = 'Audio';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Speed';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Slow',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Medium',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Fast',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Hardcore',
        ),
    );

}
