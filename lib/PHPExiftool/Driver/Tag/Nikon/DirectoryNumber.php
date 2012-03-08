<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class DirectoryNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 6;

    protected $Name = 'DirectoryNumber';

    protected $FullName = 'Nikon::FileInfo';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Directory Number';

}
