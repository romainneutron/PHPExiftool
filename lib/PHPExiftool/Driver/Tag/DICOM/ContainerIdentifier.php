<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class ContainerIdentifier extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0040,0512';

    protected $Name = 'ContainerIdentifier';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Container Identifier';

}
