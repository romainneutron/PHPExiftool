<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class StackID extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0020,9056';

    protected $Name = 'StackID';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Stack ID';

}
