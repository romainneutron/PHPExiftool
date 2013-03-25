# PHP-Exiftool

[![Build Status](https://secure.travis-ci.org/romainneutron/PHPExiftool.png?branch=master)](http://travis-ci.org/romainneutron/PHPExiftool)

PHP Exiftool is an Object Oriented driver for Phil Harvey's Exiftool (see
http://www.sno.phy.queensu.ca/~phil/exiftool/).
Exiftool is a powerfull library and command line utility for reading, writing
and editing meta information written in Perl.

PHPExiftool provides an intuitive object oriented interface to read and write
metadatas.

You will find some example below.
This driver is not suitable for production, it is still under heavy development.

## Installation

The recommended way to install PHP-Exiftool is [through composer](http://getcomposer.org).

```JSON
{
    "require": {
        "phpexiftool/phpexiftool": "~0.1.0"
    }
}
```

## Usage

### Exiftool Reader

```php
use Monolog\Logger;
use PHPExiftool\Reader;
use PHPExiftool\Driver\Value\Value;

$logger = new Logger('exiftool');
$Reader = Reader::create($logger);

$Reader
  ->in(array('documents', '/Picture'))
  ->extensions(array('doc', 'jpg', 'cr2', 'dng'))
  ->exclude(array('test', 'tmp'))
  ->followSymLinks();

foreach ($Reader as $MetaDatas) {
    echo "found file " . $MetaDatas->getFile() . "\n";

    foreach ($MetaDatas as $metadata) {
        if ($metadata->getValue()->getType() === Value::TYPE_BINARY) {
            echo sprintf("\t--> Field %s has binary datas" . PHP_EOL, $metadata->getTag());
        } else {
            echo sprintf("\t--> Field %s has value(s) %s" . PHP_EOL, $metadata->getTag(), $metadata->getValue()->asString());
        }
    }
}
```

### Exiftool Writer

```php
use PHPExiftool\Writer;
use PHPExiftool\Driver\Metadata;
use PHPExiftool\Driver\MetadataBag;
use PHPExiftool\Driver\Tag\IPTC\ObjectName;
use PHPExiftool\Driver\Value\Mono;

$Writer = Writer::create();

$bag = new MetadataBag();
$bag->add(new Metadata(new ObjectName(), new Mono('Pretty cool subject')));

$Writer->write('image.jpg', $bag);
```

## License

Project licensed under the MIT License
