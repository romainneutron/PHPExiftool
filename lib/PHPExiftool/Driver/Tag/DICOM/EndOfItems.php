<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class EndOfItems extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'FFFE,E00D';

    protected $Name = 'EndOfItems';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'End Of Items';

}
