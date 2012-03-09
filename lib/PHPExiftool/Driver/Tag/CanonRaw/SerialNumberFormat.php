<?php

namespace PHPExiftool\Driver\Tag\CanonRaw;

class SerialNumberFormat extends \PHPExiftool\Driver\Tag
{

    protected $Id = 6203;

    protected $Name = 'SerialNumberFormat';

    protected $FullName = 'CanonRaw::Main';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Serial Number Format';

    protected $flag_Permanent = true;

    protected $Values = array(
        2415919104 => array(
            'Id' => 2415919104,
            'Label' => 'Format 1',
        ),
        2684354560 => array(
            'Id' => 2684354560,
            'Label' => 'Format 2',
        ),
    );

}
