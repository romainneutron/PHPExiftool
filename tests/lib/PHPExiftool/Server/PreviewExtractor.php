<?php

namespace PHPExiftool\Server;

require_once __DIR__ . '/../AbstractPreviewExtractorTest.php';

use PHPExiftool\AbstractPreviewExtractorTest;
use PHPExiftool\ExiftoolServer;

class PreviewExtractor extends AbstractPreviewExtractorTest
{
    protected $exiftool;

    public function setUp()
    {
        $this->exiftool = new ExiftoolServer;
        $this->exiftool->start();

        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();

        if ($this->exiftool) {
            $this->exiftool->stop();
        }
    }

    protected function getExiftool()
    {
        return $this->exiftool;
    }
}