<?php
namespace fussraider\Slim\Tests;

use League\Flysystem\FilesystemInterface;

class FlysystemTest extends TestCase
{
    public function testShoudReturnsFilesystemLogger()
    {
        $this->assertInstanceOf(FilesystemInterface::class, $this->fs->getFlysystem());
    }
}
