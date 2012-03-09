<?php

namespace PHPExiftool\Driver\Tag\Canon;

class AutoISO extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'AutoISO';

    protected $FullName = 'Canon::ShotInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Auto ISO';

    protected $flag_Permanent = true;

}
