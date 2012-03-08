<?php

namespace PHPExiftool\Driver\Tag\QuickTime;

class AppleStoreAccountType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'akID';

    protected $Name = 'AppleStoreAccountType';

    protected $FullName = 'QuickTime::ItemList';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Apple Store Account Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'iTunes',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'AOL',
        ),
    );

}
