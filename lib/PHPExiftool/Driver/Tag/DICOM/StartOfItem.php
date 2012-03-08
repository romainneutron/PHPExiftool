<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class StartOfItem extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'FFFE,E000';

    protected $Name = 'StartOfItem';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Start Of Item';

}
