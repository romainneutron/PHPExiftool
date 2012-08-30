<?php

namespace PHPExiftool\Server;

require_once __DIR__ . '/../AbstractWriterTest.php';

use PHPExiftool\ExiftoolServer;
use PHPExiftool\AbstractWriterTest;

class WriterTest extends AbstractWriterTest
{
    protected $exiftool;

    public function setUp()
    {
        $this->exiftool = new ExiftoolServer();
        $this->exiftool->start();

        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();

        $this->exiftool->stop();
    }

    protected function getExiftool()
    {
        return $this->exiftool;
    }
}
