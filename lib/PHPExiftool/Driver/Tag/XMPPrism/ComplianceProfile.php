<?php

namespace PHPExiftool\Driver\Tag\XMPPrism;

class ComplianceProfile extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'complianceProfile';

    protected $Name = 'ComplianceProfile';

    protected $FullName = 'XMP::prism';

    protected $GroupName = 'XMP-prism';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-prism';

    protected $g2 = 'Document';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Compliance Profile';

    protected $flag_Avoid = true;

    protected $Values = array(
        'three' => array(
            'Id' => 'three',
            'Label' => 'Three',
        ),
    );

}
