<?php

namespace PHPExiftool\Driver\Tag\PDF;

class Linearized extends \PHPExiftool\Driver\Tag
{

    protected $Id = '_linearized';

    protected $Name = 'Linearized';

    protected $FullName = 'PDF::Main';

    protected $GroupName = 'PDF';

    protected $g0 = 'PDF';

    protected $g1 = 'PDF';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Linearized';

    protected $Values = array(
        false => array(
            'Id' => false,
            'Label' => 'No',
        ),
        true => array(
            'Id' => true,
            'Label' => 'Yes',
        ),
    );

}
