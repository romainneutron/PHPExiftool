<?php

namespace PHPExiftool\Driver\Tag\Canon;

class SequenceNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 9;

    protected $Name = 'SequenceNumber';

    protected $FullName = 'Canon::ShotInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Shot Number In Continuous Burst';

    protected $flag_Permanent = true;

}
