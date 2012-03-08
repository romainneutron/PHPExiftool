<?php

namespace PHPExiftool\Driver\Tag\KDCIFD;

class SerialNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 64000;

    protected $Name = 'SerialNumber';

    protected $FullName = 'Kodak::KDC_IFD';

    protected $GroupName = 'KDC_IFD';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'KDC_IFD';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Serial Number';

}
