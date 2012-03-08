<?php

namespace PHPExiftool\Driver\Tag\IPTC;

class EditorialUpdate extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8;

    protected $Name = 'EditorialUpdate';

    protected $FullName = 'IPTC::ApplicationRecord';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Other';

    protected $Type = 'digits';

    protected $Writable = true;

    protected $Description = 'Editorial Update';

    protected $Values = array(
        01 => array(
            'Id' => 01,
            'Label' => 'Additional language',
        ),
    );

}
