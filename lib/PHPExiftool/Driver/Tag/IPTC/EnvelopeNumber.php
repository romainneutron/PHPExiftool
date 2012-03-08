<?php

namespace PHPExiftool\Driver\Tag\IPTC;

class EnvelopeNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 40;

    protected $Name = 'EnvelopeNumber';

    protected $FullName = 'IPTC::EnvelopeRecord';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Other';

    protected $Type = 'digits';

    protected $Writable = true;

    protected $Description = 'Envelope Number';

}
