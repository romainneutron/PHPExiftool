<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class ViewNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0008,2128';

    protected $Name = 'ViewNumber';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'View Number';

}
