<?php

namespace PHPExiftool\Command;

require_once __DIR__ . '/../AbstractWriterTest.php';

use PHPExiftool\Exiftool;
use PHPExiftool\AbstractWriterTest;

class WriterTest extends AbstractWriterTest
{
    protected function getExiftool()
    {
        return new Exiftool();
    }
}
