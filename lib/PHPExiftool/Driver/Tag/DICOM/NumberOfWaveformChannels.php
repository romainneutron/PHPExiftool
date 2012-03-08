<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class NumberOfWaveformChannels extends \PHPExiftool\Driver\Tag
{

    protected $Id = '003A,0005';

    protected $Name = 'NumberOfWaveformChannels';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Number Of Waveform Channels';

}
