<?php

namespace PHPExiftool\Driver\Tag\Canon;

class FlashGuideNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 13;

    protected $Name = 'FlashGuideNumber';

    protected $FullName = 'Canon::ShotInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Flash Guide Number';

}
