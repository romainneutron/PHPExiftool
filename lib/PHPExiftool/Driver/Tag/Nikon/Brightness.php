<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class Brightness extends \PHPExiftool\Driver\Tag
{

    protected $Id = 52;

    protected $Name = 'Brightness';

    protected $FullName = 'Nikon::PictureControl';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Brightness';

    protected $flag_Permanent = true;

}
