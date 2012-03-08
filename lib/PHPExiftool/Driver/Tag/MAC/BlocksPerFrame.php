<?php

namespace PHPExiftool\Driver\Tag\MAC;

class BlocksPerFrame extends \PHPExiftool\Driver\Tag
{

    protected $Id = 2;

    protected $Name = 'BlocksPerFrame';

    protected $FullName = 'APE::NewHeader';

    protected $GroupName = 'MAC';

    protected $g0 = 'APE';

    protected $g1 = 'MAC';

    protected $g2 = 'Audio';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Blocks Per Frame';

}
