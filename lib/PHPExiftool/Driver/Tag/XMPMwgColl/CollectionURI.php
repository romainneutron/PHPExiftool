<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPMwgColl;

class CollectionURI extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'CollectionsCollectionURI';

    protected $Name = 'CollectionURI';

    protected $FullName = 'XMP::mwg_coll';

    protected $GroupName = 'XMP-mwg-coll';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-mwg-coll';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Collection URI';

}
