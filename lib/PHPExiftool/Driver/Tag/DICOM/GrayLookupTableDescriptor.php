<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class GrayLookupTableDescriptor extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0028,1100';

    protected $Name = 'GrayLookupTableDescriptor';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Gray Lookup Table Descriptor';

}
