<?php

namespace PHPExiftool\Driver\Tag\NikonScan;

class DigitalROC extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'DigitalROC';

    protected $FullName = 'Nikon::ROC';

    protected $GroupName = 'NikonScan';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonScan';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Digital ROC';

}
