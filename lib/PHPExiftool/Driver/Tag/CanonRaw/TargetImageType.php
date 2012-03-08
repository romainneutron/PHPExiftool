<?php

namespace PHPExiftool\Driver\Tag\CanonRaw;

class TargetImageType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4106;

    protected $Name = 'TargetImageType';

    protected $FullName = 'CanonRaw::Main';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Target Image Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Real-world Subject',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Written Document',
        ),
    );

}
