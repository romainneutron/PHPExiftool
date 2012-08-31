<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

use PHPExiftool\Driver\AbstractTag;

class AFFineTuneAdj extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'AFFineTuneAdj';

    protected $FullName = 'mixed';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'AF Fine Tune Adj';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 0,
        ),
        1 => array(
            'Id' => 58,
            'Label' => '+1',
        ),
        2 => array(
            'Id' => 59,
            'Label' => '+2',
        ),
        3 => array(
            'Id' => 60,
            'Label' => '+4',
        ),
        4 => array(
            'Id' => 61,
            'Label' => '+8',
        ),
        5 => array(
            'Id' => 62,
            'Label' => '+16',
        ),
        6 => array(
            'Id' => 194,
            'Label' => '-16',
        ),
        7 => array(
            'Id' => 195,
            'Label' => '-8',
        ),
        8 => array(
            'Id' => 196,
            'Label' => '-4',
        ),
        9 => array(
            'Id' => 197,
            'Label' => '-2',
        ),
        10 => array(
            'Id' => 198,
            'Label' => '-1',
        ),
        11 => array(
            'Id' => 4158,
            'Label' => '+17',
        ),
        12 => array(
            'Id' => 4290,
            'Label' => '-17',
        ),
        13 => array(
            'Id' => 8253,
            'Label' => '+9',
        ),
        14 => array(
            'Id' => 8254,
            'Label' => '+18',
        ),
        15 => array(
            'Id' => 8386,
            'Label' => '-18',
        ),
        16 => array(
            'Id' => 8387,
            'Label' => '-9',
        ),
        17 => array(
            'Id' => 12350,
            'Label' => '+19',
        ),
        18 => array(
            'Id' => 12482,
            'Label' => '-19',
        ),
        19 => array(
            'Id' => 16444,
            'Label' => '+5',
        ),
        20 => array(
            'Id' => 16445,
            'Label' => '+10',
        ),
        21 => array(
            'Id' => 16446,
            'Label' => '+20',
        ),
        22 => array(
            'Id' => 16578,
            'Label' => '-20',
        ),
        23 => array(
            'Id' => 16579,
            'Label' => '-10',
        ),
        24 => array(
            'Id' => 16580,
            'Label' => '-5',
        ),
        25 => array(
            'Id' => 24637,
            'Label' => '+11',
        ),
        26 => array(
            'Id' => 24771,
            'Label' => '-11',
        ),
        27 => array(
            'Id' => 32827,
            'Label' => '+3',
        ),
        28 => array(
            'Id' => 32828,
            'Label' => '+6',
        ),
        29 => array(
            'Id' => 32829,
            'Label' => '+12',
        ),
        30 => array(
            'Id' => 32963,
            'Label' => '-12',
        ),
        31 => array(
            'Id' => 32964,
            'Label' => '-6',
        ),
        32 => array(
            'Id' => 32965,
            'Label' => '-3',
        ),
        33 => array(
            'Id' => 41021,
            'Label' => '+13',
        ),
        34 => array(
            'Id' => 41155,
            'Label' => '-13',
        ),
        35 => array(
            'Id' => 49212,
            'Label' => '+7',
        ),
        36 => array(
            'Id' => 49213,
            'Label' => '+14',
        ),
        37 => array(
            'Id' => 49347,
            'Label' => '-14',
        ),
        38 => array(
            'Id' => 49348,
            'Label' => '-7',
        ),
        39 => array(
            'Id' => 57405,
            'Label' => '+15',
        ),
        40 => array(
            'Id' => 57539,
            'Label' => '-15',
        ),
        41 => array(
            'Id' => 0,
            'Label' => 0,
        ),
        42 => array(
            'Id' => 1086,
            'Label' => '+13',
        ),
        43 => array(
            'Id' => 1218,
            'Label' => '-13',
        ),
        44 => array(
            'Id' => 6205,
            'Label' => '+7',
        ),
        45 => array(
            'Id' => 6206,
            'Label' => '+14',
        ),
        46 => array(
            'Id' => 6338,
            'Label' => '-14',
        ),
        47 => array(
            'Id' => 6339,
            'Label' => '-7',
        ),
        48 => array(
            'Id' => 11326,
            'Label' => '+15',
        ),
        49 => array(
            'Id' => 11458,
            'Label' => '-15',
        ),
        50 => array(
            'Id' => 16442,
            'Label' => '+1',
        ),
        51 => array(
            'Id' => 16443,
            'Label' => '+2',
        ),
        52 => array(
            'Id' => 16444,
            'Label' => '+4',
        ),
        53 => array(
            'Id' => 16445,
            'Label' => '+8',
        ),
        54 => array(
            'Id' => 16446,
            'Label' => '+16',
        ),
        55 => array(
            'Id' => 16578,
            'Label' => '-16',
        ),
        56 => array(
            'Id' => 16579,
            'Label' => '-8',
        ),
        57 => array(
            'Id' => 16580,
            'Label' => '-4',
        ),
        58 => array(
            'Id' => 16581,
            'Label' => '-2',
        ),
        59 => array(
            'Id' => 16582,
            'Label' => '-1',
        ),
        60 => array(
            'Id' => 21566,
            'Label' => '+17',
        ),
        61 => array(
            'Id' => 21698,
            'Label' => '-17',
        ),
        62 => array(
            'Id' => 26685,
            'Label' => '+9',
        ),
        63 => array(
            'Id' => 26686,
            'Label' => '+18',
        ),
        64 => array(
            'Id' => 26818,
            'Label' => '-18',
        ),
        65 => array(
            'Id' => 26819,
            'Label' => '-9',
        ),
        66 => array(
            'Id' => 31806,
            'Label' => '+19',
        ),
        67 => array(
            'Id' => 31938,
            'Label' => '-19',
        ),
        68 => array(
            'Id' => 36924,
            'Label' => '+5',
        ),
        69 => array(
            'Id' => 36925,
            'Label' => '+10',
        ),
        70 => array(
            'Id' => 36926,
            'Label' => '+20',
        ),
        71 => array(
            'Id' => 37058,
            'Label' => '-20',
        ),
        72 => array(
            'Id' => 37059,
            'Label' => '-10',
        ),
        73 => array(
            'Id' => 37060,
            'Label' => '-5',
        ),
        74 => array(
            'Id' => 47165,
            'Label' => '+11',
        ),
        75 => array(
            'Id' => 47299,
            'Label' => '-11',
        ),
        76 => array(
            'Id' => 57403,
            'Label' => '+3',
        ),
        77 => array(
            'Id' => 57404,
            'Label' => '+6',
        ),
        78 => array(
            'Id' => 57405,
            'Label' => '+12',
        ),
        79 => array(
            'Id' => 57539,
            'Label' => '-12',
        ),
        80 => array(
            'Id' => 57540,
            'Label' => '-6',
        ),
        81 => array(
            'Id' => 57541,
            'Label' => '-3',
        ),
    );

}
