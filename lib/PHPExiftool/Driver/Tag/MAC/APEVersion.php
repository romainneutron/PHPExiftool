<?php

namespace PHPExiftool\Driver\Tag\MAC;

class APEVersion extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'APEVersion';

    protected $FullName = 'APE::OldHeader';

    protected $GroupName = 'MAC';

    protected $g0 = 'APE';

    protected $g1 = 'MAC';

    protected $g2 = 'Audio';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'APE Version';

}
