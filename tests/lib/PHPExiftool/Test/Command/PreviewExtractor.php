<?php

namespace PHPExiftool\Test\Command;

require_once __DIR__ . '/../AbstractPreviewExtractorTest.php';

use PHPExiftool\AbstractPreviewExtractorTest;
use PHPExiftool\Exiftool;

class PreviewExtractor extends AbstractPreviewExtractorTest
{

    protected function getExiftool()
    {
        return new Exiftool();
    }
}