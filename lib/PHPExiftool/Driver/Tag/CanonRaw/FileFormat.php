<?php

namespace PHPExiftool\Driver\Tag\CanonRaw;

class FileFormat extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'FileFormat';

    protected $FullName = 'CanonRaw::ImageFormat';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'File Format';

    protected $Values = array(
        65536 => array(
            'Id' => 65536,
            'Label' => 'JPEG (lossy)',
        ),
        65538 => array(
            'Id' => 65538,
            'Label' => 'JPEG (non-quantization)',
        ),
        65539 => array(
            'Id' => 65539,
            'Label' => 'JPEG (lossy/non-quantization toggled)',
        ),
        131073 => array(
            'Id' => 131073,
            'Label' => 'CRW',
        ),
    );

}
