<?php

namespace PHPExiftool\Driver\Tag\NikonScan;

class MasterGain extends \PHPExiftool\Driver\Tag
{

    protected $Id = 80;

    protected $Name = 'MasterGain';

    protected $FullName = 'Nikon::Scan';

    protected $GroupName = 'NikonScan';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonScan';

    protected $g2 = 'Image';

    protected $Type = 'rational64s';

    protected $Writable = true;

    protected $Description = 'Master Gain';

    protected $flag_Permanent = true;

}
