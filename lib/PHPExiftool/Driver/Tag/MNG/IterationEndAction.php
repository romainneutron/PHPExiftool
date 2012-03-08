<?php

namespace PHPExiftool\Driver\Tag\MNG;

class IterationEndAction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'IterationEndAction';

    protected $FullName = 'MNG::TerminationAction';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Iteration End Action';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Show Last Frame',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Display Nothing',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Show First Frame',
        ),
    );

}
