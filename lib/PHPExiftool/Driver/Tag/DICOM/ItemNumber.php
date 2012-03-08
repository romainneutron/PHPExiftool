<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class ItemNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0020,0019';

    protected $Name = 'ItemNumber';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Item Number';

}
