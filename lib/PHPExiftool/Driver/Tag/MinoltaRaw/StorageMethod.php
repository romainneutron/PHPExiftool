<?php

namespace PHPExiftool\Driver\Tag\MinoltaRaw;

class StorageMethod extends \PHPExiftool\Driver\Tag
{

    protected $Id = 18;

    protected $Name = 'StorageMethod';

    protected $FullName = 'MinoltaRaw::PRD';

    protected $GroupName = 'MinoltaRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'MinoltaRaw';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Storage Method';

    protected $Values = array(
        82 => array(
            'Id' => 82,
            'Label' => 'Padded',
        ),
        89 => array(
            'Id' => 89,
            'Label' => 'Linear',
        ),
    );

}
