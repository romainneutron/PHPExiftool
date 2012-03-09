<?php

namespace PHPExiftool\Driver\Tag\Pentax;

class InternalSerialNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4;

    protected $Name = 'InternalSerialNumber';

    protected $FullName = 'Pentax::CameraInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Internal Serial Number';

    protected $flag_Permanent = true;

}
