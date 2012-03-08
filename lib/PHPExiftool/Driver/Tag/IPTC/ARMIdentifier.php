<?php

namespace PHPExiftool\Driver\Tag\IPTC;

class ARMIdentifier extends \PHPExiftool\Driver\Tag
{

    protected $Id = 120;

    protected $Name = 'ARMIdentifier';

    protected $FullName = 'IPTC::EnvelopeRecord';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Other';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'ARM Identifier';

}
