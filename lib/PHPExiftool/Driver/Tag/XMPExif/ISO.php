<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class ISO extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'ISOSpeedRatings';

    protected $Name = 'ISO';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'ISO';

    protected $flag_List = true;

    protected $flag_Seq = true;

}
