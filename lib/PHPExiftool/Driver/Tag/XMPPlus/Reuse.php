<?php

namespace PHPExiftool\Driver\Tag\XMPPlus;

class Reuse extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Reuse';

    protected $Name = 'Reuse';

    protected $FullName = 'XMP::plus';

    protected $GroupName = 'XMP-plus';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-plus';

    protected $g2 = 'Author';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Reuse';

    protected $Values = array(
        'RE-NAP' => array(
            'Id' => 'RE-NAP',
            'Label' => 'Not Applicable',
        ),
        'RE-REU' => array(
            'Id' => 'RE-REU',
            'Label' => 'Repeat Use',
        ),
    );

}
