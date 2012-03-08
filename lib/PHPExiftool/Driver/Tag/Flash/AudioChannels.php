<?php

namespace PHPExiftool\Driver\Tag\Flash;

class AudioChannels extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Bit7';

    protected $Name = 'AudioChannels';

    protected $FullName = 'Flash::Audio';

    protected $GroupName = 'Flash';

    protected $g0 = 'Flash';

    protected $g1 = 'Flash';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Audio Channels';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => '1 (mono)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '2 (stereo)',
        ),
    );

}
