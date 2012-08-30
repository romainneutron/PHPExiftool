<?php

namespace PHPExiftool\Test;

use PHPExiftool\Exiftool;

class ExiftoolTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers PHPExiftool\Exiftool::executeCommand
     */
    public function testExecuteCommand()
    {
        $exiftool = new Exiftool();
        $this->assertRegExp('/\d+\.\d+/', $exiftool->executeCommand('-ver'));
    }

    /**
     * @covers PHPExiftool\Exiftool::executeCommand
     * @covers \PHPExiftool\Exception\RuntimeException
     * @expectedException \PHPExiftool\Exception\RuntimeException
     */
    public function testExecuteCommandFailed()
    {
        $exiftool = new Exiftool();
        $exiftool->executeCommand('-prout');
    }
}

