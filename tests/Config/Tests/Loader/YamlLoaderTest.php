<?php

namespace Sinergi\Config\Tests\Loader;

use PHPUnit\Framework\TestCase;
use Sinergi\Config\Loader\YamlLoader;

class YamlLoaderTest extends TestCase
{
    public function testYamlLoader()
    {
        $content = YamlLoader::load(__DIR__ . '/../__files/yaml.yaml');
        $this->assertEquals('Hello', $content['string']);
    }

    public function testYamlLoaderArray()
    {
        $content = YamlLoader::load(__DIR__ . '/../__files/yaml.yaml');
        $this->assertEquals('Hi', $content['array']['key1']);
        $this->assertEquals('Yesterday', $content['array']['key2']);
    }
}
