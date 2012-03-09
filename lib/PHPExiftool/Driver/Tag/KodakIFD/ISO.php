<?php

namespace PHPExiftool\Driver\Tag\KodakIFD;

class ISO extends \PHPExiftool\Driver\Tag
{

    protected $Id = 6020;

    protected $Name = 'ISO';

    protected $FullName = 'Kodak::IFD';

    protected $GroupName = 'KodakIFD';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'KodakIFD';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'ISO';

    protected $flag_Permanent = true;

}
