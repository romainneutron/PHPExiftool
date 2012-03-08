<?php

namespace PHPExiftool\Driver\Tag\Canon;

class BaseISO extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'BaseISO';

    protected $FullName = 'Canon::ShotInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Base ISO';

}
