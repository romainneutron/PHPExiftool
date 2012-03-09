<?php

namespace PHPExiftool\Driver\Tag\Canon;

class BulbDuration extends \PHPExiftool\Driver\Tag
{

    protected $Id = 24;

    protected $Name = 'BulbDuration';

    protected $FullName = 'Canon::ShotInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Bulb Duration';

    protected $flag_Permanent = true;

}
