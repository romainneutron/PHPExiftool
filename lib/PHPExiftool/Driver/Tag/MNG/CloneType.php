<?php

namespace PHPExiftool\Driver\Tag\MNG;

class CloneType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4;

    protected $Name = 'CloneType';

    protected $FullName = 'MNG::CloneObject';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Clone Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Full',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Parital',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Renumber object',
        ),
    );

}
