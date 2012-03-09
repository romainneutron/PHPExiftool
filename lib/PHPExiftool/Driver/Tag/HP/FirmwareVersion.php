<?php

namespace PHPExiftool\Driver\Tag\HP;

class FirmwareVersion extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'FWRV';

    protected $Name = 'FirmwareVersion';

    protected $FullName = 'HP::TDHD';

    protected $GroupName = 'HP';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'HP';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Firmware Version';

    protected $flag_Permanent = true;

}
