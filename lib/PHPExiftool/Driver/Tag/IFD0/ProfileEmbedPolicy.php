<?php

namespace PHPExiftool\Driver\Tag\IFD0;

class ProfileEmbedPolicy extends \PHPExiftool\Driver\Tag
{

    protected $Id = 50941;

    protected $Name = 'ProfileEmbedPolicy';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Profile Embed Policy';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Allow Copying',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Embed if Used',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Never Embed',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'No Restrictions',
        ),
    );

}