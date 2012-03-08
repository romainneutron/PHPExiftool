<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class TransactionUID extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0008,1195';

    protected $Name = 'TransactionUID';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Transaction UID';

}
