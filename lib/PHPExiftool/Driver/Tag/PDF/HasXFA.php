<?php

namespace PHPExiftool\Driver\Tag\PDF;

class HasXFA extends \PHPExiftool\Driver\Tag
{

    protected $Id = '_has_xfa';

    protected $Name = 'HasXFA';

    protected $FullName = 'PDF::AcroForm';

    protected $GroupName = 'PDF';

    protected $g0 = 'PDF';

    protected $g1 = 'PDF';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Has XFA';

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
