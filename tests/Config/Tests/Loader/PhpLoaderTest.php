<?php

namespace Sinergi\Config\Tests\Loader;

use PHPUnit\Framework\TestCase;
use Sinergi\Config\Loader\PhpLoader;

class PhpLoaderTest extends TestCase
{
    public function testPhpLoader()
    {
        $content = PhpLoader::load(__DIR__ . '/../__files/app.php');
        $this->assertEquals('America/New_York', $content['timezone']);
    }
}
