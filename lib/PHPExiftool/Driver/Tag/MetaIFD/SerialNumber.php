<?php

namespace PHPExiftool\Driver\Tag\MetaIFD;

class SerialNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 50004;

    protected $Name = 'SerialNumber';

    protected $FullName = 'Kodak::Meta';

    protected $GroupName = 'MetaIFD';

    protected $g0 = 'Meta';

    protected $g1 = 'MetaIFD';

    protected $g2 = 'Image';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Serial Number';

    protected $local_g2 = 'Camera';

}
