<?php

namespace PHPExiftool\Driver\Tag\MAC;

class BitsPerSample extends \PHPExiftool\Driver\Tag
{

    protected $Id = 8;

    protected $Name = 'BitsPerSample';

    protected $FullName = 'APE::NewHeader';

    protected $GroupName = 'MAC';

    protected $g0 = 'APE';

    protected $g1 = 'MAC';

    protected $g2 = 'Audio';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Bits Per Sample';

}
