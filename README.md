#PHPExiftool

[![Build Status](https://secure.travis-ci.org/romainneutron/PHPExiftool.png?branch=master)](http://travis-ci.org/romainneutron/PHPExiftool)

PHP Exiftool is a PHP interface to communicate with Phil Harvey's Exiftool.

see : http://www.sno.phy.queensu.ca/~phil/exiftool/



This driver is not suitable for production, it is still under heavy development.

Examples of use :

Extract metadata :

<pre>
<?php

$metadatas = \PHPExiftool\Exiftool::getMetadatas(new SplFileInfo('RawImage.CR2'));

//True if there is a IPTC:SupplementalCategories value
$metadatas->containsKey('IPTC:SupplementalCategories');

foreach($metadatas as $metadata)
{
  echo sprintf("Found tag %s \n", $metadata->getTag()->getTagname());

  if($metadata->getValue instanceof '\PHPExiftool\Driver\Metadata\MultiBag')
  {
    // Handle multivalued field
  }
  else
  {
    // Handle monovalued field
  }
}
</pre>


