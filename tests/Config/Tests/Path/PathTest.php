<?php

namespace Sinergi\Config\Tests;

use PHPUnit\Framework\TestCase;
use Sinergi\Config\Configuration;
use Sinergi\Config\Path\Path;

class PathTest extends TestCase
{
    public function testConfigConstructor()
    {
        $config = new Configuration(['path' => __DIR__ . "/../__files"]);
        $path = $config->getPaths()->get(0)->getPath();
        $this->assertEquals(realpath(__DIR__ . "/../__files"), $path);
    }

    /**
     * @expectedException \Sinergi\Config\Path\PathNotFoundException
     */
    public function testConfigConstructorBadPath()
    {
        new Path("/this/path/does/not/exists");
    }
}
