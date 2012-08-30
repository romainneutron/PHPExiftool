<?php

namespace PHPExiftool\Command;

require_once __DIR__ . '/../AbstractReaderTest.php';

use PHPExiftool\AbstractReaderTest;
use PHPExiftool\Reader;

class ReaderTest extends AbstractReaderTest
{

    protected function getReader()
    {
        return Reader::create();
    }
}