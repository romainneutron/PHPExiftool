<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Olympus;

class LensType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 513;

    protected $Name = 'LensType';

    protected $FullName = 'Olympus::Equipment';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Lens Type';

    protected $flag_Permanent = true;

    protected $Values = array(
        '0 0 0' => array(
            'Id' => '0 0 0',
            'Label' => 'None',
        ),
        '0 1 0' => array(
            'Id' => '0 1 0',
            'Label' => 'Olympus Zuiko Digital ED 50mm F2.0 Macro',
        ),
        '0 1 1' => array(
            'Id' => '0 1 1',
            'Label' => 'Olympus Zuiko Digital 40-150mm F3.5-4.5',
        ),
        '0 1 16' => array(
            'Id' => '0 1 16',
            'Label' => 'Olympus M.Zuiko Digital ED 14-42mm F3.5-5.6',
        ),
        '0 2 0' => array(
            'Id' => '0 2 0',
            'Label' => 'Olympus Zuiko Digital ED 150mm F2.0',
        ),
        '0 2 16' => array(
            'Id' => '0 2 16',
            'Label' => 'Olympus M.Zuiko Digital 17mm F2.8 Pancake',
        ),
        '0 3 0' => array(
            'Id' => '0 3 0',
            'Label' => 'Olympus Zuiko Digital ED 300mm F2.8',
        ),
        '0 3 16' => array(
            'Id' => '0 3 16',
            'Label' => 'Olympus M.Zuiko Digital ED 14-150mm F4.0-5.6',
        ),
        '0 4 16' => array(
            'Id' => '0 4 16',
            'Label' => 'Olympus M.Zuiko Digital ED 9-18mm F4.0-5.6',
        ),
        '0 5 0' => array(
            'Id' => '0 5 0',
            'Label' => 'Olympus Zuiko Digital 14-54mm F2.8-3.5',
        ),
        '0 5 1' => array(
            'Id' => '0 5 1',
            'Label' => 'Olympus Zuiko Digital Pro ED 90-250mm F2.8',
        ),
        '0 5 16' => array(
            'Id' => '0 5 16',
            'Label' => 'Olympus M.Zuiko Digital ED 14-42mm F3.5-5.6 L',
        ),
        '0 6 0' => array(
            'Id' => '0 6 0',
            'Label' => 'Olympus Zuiko Digital ED 50-200mm F2.8-3.5',
        ),
        '0 6 1' => array(
            'Id' => '0 6 1',
            'Label' => 'Olympus Zuiko Digital ED 8mm F3.5 Fisheye',
        ),
        '0 6 16' => array(
            'Id' => '0 6 16',
            'Label' => 'Olympus M.Zuiko Digital ED 40-150mm F4.0-5.6',
        ),
        '0 7 0' => array(
            'Id' => '0 7 0',
            'Label' => 'Olympus Zuiko Digital 11-22mm F2.8-3.5',
        ),
        '0 7 1' => array(
            'Id' => '0 7 1',
            'Label' => 'Olympus Zuiko Digital 18-180mm F3.5-6.3',
        ),
        '0 7 16' => array(
            'Id' => '0 7 16',
            'Label' => 'Olympus M.Zuiko Digital ED 12mm F2.0',
        ),
        '0 8 1' => array(
            'Id' => '0 8 1',
            'Label' => 'Olympus Zuiko Digital 70-300mm F4.0-5.6',
        ),
        '0 8 16' => array(
            'Id' => '0 8 16',
            'Label' => 'Olympus M.Zuiko Digital ED 75-300mm F4.8-6.7',
        ),
        '0 9 16' => array(
            'Id' => '0 9 16',
            'Label' => 'Olympus M.Zuiko Digital 14-42mm F3.5-5.6 II',
        ),
        '0 16 16' => array(
            'Id' => '0 16 16',
            'Label' => 'Olympus M.Zuiko Digital ED 12-50mm F3.5-6.3 EZ',
        ),
        '0 17 16' => array(
            'Id' => '0 17 16',
            'Label' => 'Olympus M.Zuiko Digital 45mm F1.8',
        ),
        '0 19 16' => array(
            'Id' => '0 19 16',
            'Label' => 'Olympus M.Zuiko Digital ED 14-42mm F3.5-5.6 II R',
        ),
        '0 20 16' => array(
            'Id' => '0 20 16',
            'Label' => 'Olympus M.Zuiko Digital ED 15-150mm II or 40-150mm R',
        ),
        '0 20 16.1' => array(
            'Id' => '0 20 16.1',
            'Label' => 'Olympus M.Zuiko Digital ED 14-150mm F4.0-5.6 II',
        ),
        '0 20 16.2' => array(
            'Id' => '0 20 16.2',
            'Label' => 'Olympus M.Zuiko Digital ED 40-150mm F4.0-5.6 R',
        ),
        '0 21 0' => array(
            'Id' => '0 21 0',
            'Label' => 'Olympus Zuiko Digital ED 7-14mm F4.0',
        ),
        '0 23 0' => array(
            'Id' => '0 23 0',
            'Label' => 'Olympus Zuiko Digital Pro ED 35-100mm F2.0',
        ),
        '0 24 0' => array(
            'Id' => '0 24 0',
            'Label' => 'Olympus Zuiko Digital 14-45mm F3.5-5.6',
        ),
        '0 32 0' => array(
            'Id' => '0 32 0',
            'Label' => 'Olympus Zuiko Digital 35mm F3.5 Macro',
        ),
        '0 34 0' => array(
            'Id' => '0 34 0',
            'Label' => 'Olympus Zuiko Digital 17.5-45mm F3.5-5.6',
        ),
        '0 35 0' => array(
            'Id' => '0 35 0',
            'Label' => 'Olympus Zuiko Digital ED 14-42mm F3.5-5.6',
        ),
        '0 36 0' => array(
            'Id' => '0 36 0',
            'Label' => 'Olympus Zuiko Digital ED 40-150mm F4.0-5.6',
        ),
        '0 48 0' => array(
            'Id' => '0 48 0',
            'Label' => 'Olympus Zuiko Digital ED 50-200mm F2.8-3.5 SWD',
        ),
        '0 49 0' => array(
            'Id' => '0 49 0',
            'Label' => 'Olympus Zuiko Digital ED 12-60mm F2.8-4.0 SWD',
        ),
        '0 50 0' => array(
            'Id' => '0 50 0',
            'Label' => 'Olympus Zuiko Digital ED 14-35mm F2.0 SWD',
        ),
        '0 51 0' => array(
            'Id' => '0 51 0',
            'Label' => 'Olympus Zuiko Digital 25mm F2.8',
        ),
        '0 52 0' => array(
            'Id' => '0 52 0',
            'Label' => 'Olympus Zuiko Digital ED 9-18mm F4.0-5.6',
        ),
        '0 53 0' => array(
            'Id' => '0 53 0',
            'Label' => 'Olympus Zuiko Digital 14-54mm F2.8-3.5 II',
        ),
        '1 1 0' => array(
            'Id' => '1 1 0',
            'Label' => 'Sigma 18-50mm F3.5-5.6',
        ),
        '1 2 0' => array(
            'Id' => '1 2 0',
            'Label' => 'Sigma 55-200mm F4.0-5.6 DC',
        ),
        '1 3 0' => array(
            'Id' => '1 3 0',
            'Label' => 'Sigma 18-125mm F3.5-5.6 DC',
        ),
        '1 4 0' => array(
            'Id' => '1 4 0',
            'Label' => 'Sigma 18-125mm F3.5-5.6',
        ),
        '1 5 0' => array(
            'Id' => '1 5 0',
            'Label' => 'Sigma 30mm F1.4',
        ),
        '1 6 0' => array(
            'Id' => '1 6 0',
            'Label' => 'Sigma 50-500mm F4.0-6.3 EX DG APO HSM RF',
        ),
        '1 7 0' => array(
            'Id' => '1 7 0',
            'Label' => 'Sigma 105mm F2.8 DG',
        ),
        '1 8 0' => array(
            'Id' => '1 8 0',
            'Label' => 'Sigma 150mm F2.8 DG HSM',
        ),
        '1 16 0' => array(
            'Id' => '1 16 0',
            'Label' => 'Sigma 24mm F1.8 EX DG Aspherical Macro',
        ),
        '1 17 0' => array(
            'Id' => '1 17 0',
            'Label' => 'Sigma 135-400mm F4.5-5.6 DG ASP APO RF',
        ),
        '1 18 0' => array(
            'Id' => '1 18 0',
            'Label' => 'Sigma 300-800mm F5.6 EX DG APO',
        ),
        '1 19 0' => array(
            'Id' => '1 19 0',
            'Label' => 'Sigma 30mm F1.4 EX DC HSM',
        ),
        '1 20 0' => array(
            'Id' => '1 20 0',
            'Label' => 'Sigma 50-500mm F4.0-6.3 EX DG APO HSM RF',
        ),
        '1 21 0' => array(
            'Id' => '1 21 0',
            'Label' => 'Sigma 10-20mm F4.0-5.6 EX DC HSM',
        ),
        '1 22 0' => array(
            'Id' => '1 22 0',
            'Label' => 'Sigma 70-200mm F2.8 EX DG Macro HSM II',
        ),
        '1 23 0' => array(
            'Id' => '1 23 0',
            'Label' => 'Sigma 50mm F1.4 EX DG HSM',
        ),
        '2 1 0' => array(
            'Id' => '2 1 0',
            'Label' => 'Leica D Vario Elmarit 14-50mm F2.8-3.5 Asph.',
        ),
        '2 1 16' => array(
            'Id' => '2 1 16',
            'Label' => 'Lumix G Vario 14-45mm F3.5-5.6 Asph. Mega OIS',
        ),
        '2 2 0' => array(
            'Id' => '2 2 0',
            'Label' => 'Leica D Summilux 25mm F1.4 Asph.',
        ),
        '2 2 16' => array(
            'Id' => '2 2 16',
            'Label' => 'Lumix G Vario 45-200mm F4-5.6 Mega OIS',
        ),
        '2 3 0' => array(
            'Id' => '2 3 0',
            'Label' => 'Leica D Vario Elmar 14-50mm F3.8-5.6 Asph. Mega OIS',
        ),
        '2 3 1' => array(
            'Id' => '2 3 1',
            'Label' => 'Leica D Vario Elmar 14-50mm F3.8-5.6 Asph.',
        ),
        '2 3 16' => array(
            'Id' => '2 3 16',
            'Label' => 'Lumix G Vario HD 14-140mm F4-5.8 Asph. Mega OIS',
        ),
        '2 4 0' => array(
            'Id' => '2 4 0',
            'Label' => 'Leica D Vario Elmar 14-150mm F3.5-5.6',
        ),
        '2 4 16' => array(
            'Id' => '2 4 16',
            'Label' => 'Lumix G Vario 7-14mm F4 Asph.',
        ),
        '2 5 16' => array(
            'Id' => '2 5 16',
            'Label' => 'Lumix G 20mm F1.7 Asph.',
        ),
        '2 6 16' => array(
            'Id' => '2 6 16',
            'Label' => 'Leica DG Macro-Elmarit 45mm F2.8',
        ),
        '2 8 16' => array(
            'Id' => '2 8 16',
            'Label' => 'Lumix G Fisheye 8mm F3.5',
        ),
        '2 9 16' => array(
            'Id' => '2 9 16',
            'Label' => 'Lumix G Vario 100-300mm F4.0-5.6 OIS',
        ),
        '2 16 16' => array(
            'Id' => '2 16 16',
            'Label' => 'Lumix G 14mm F2.5 Asph.',
        ),
        '2 21 16' => array(
            'Id' => '2 21 16',
            'Label' => 'Lumix G X Vario 12-35mm F2.8 ASPH Power OIS',
        ),
        '3 1 0' => array(
            'Id' => '3 1 0',
            'Label' => 'Leica D Vario Elmarit 14-50mm F2.8-3.5 Asph.',
        ),
        '3 2 0' => array(
            'Id' => '3 2 0',
            'Label' => 'Leica D Summilux 25mm F1.4 Asph.',
        ),
    );

}
