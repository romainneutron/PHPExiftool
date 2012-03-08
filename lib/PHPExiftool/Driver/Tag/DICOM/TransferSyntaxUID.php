<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class TransferSyntaxUID extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0002,0010';

    protected $Name = 'TransferSyntaxUID';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Transfer Syntax UID';

}
