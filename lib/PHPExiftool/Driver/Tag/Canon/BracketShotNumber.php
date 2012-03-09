<?php

namespace PHPExiftool\Driver\Tag\Canon;

class BracketShotNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 5;

    protected $Name = 'BracketShotNumber';

    protected $FullName = 'Canon::FileInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Bracket Shot Number';

    protected $flag_Permanent = true;

}
