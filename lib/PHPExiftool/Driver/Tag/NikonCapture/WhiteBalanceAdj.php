<?php

namespace PHPExiftool\Driver\Tag\NikonCapture;

class WhiteBalanceAdj extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1990472196;

    protected $Name = 'WhiteBalanceAdj';

    protected $FullName = 'NikonCapture::Main';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'White Balance Adj';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On',
        ),
    );

}
