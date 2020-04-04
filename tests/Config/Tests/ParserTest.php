<?php

namespace Sinergi\Config\Tests;

use PHPUnit\Framework\TestCase;
use Sinergi\Config\Parser;

class ParserTest extends TestCase
{
    public function testGetKey()
    {
        $key = Parser::getKey('this.is.file');
        $this->assertCount(3, $key);
        $this->assertCount(1, $key[2]);
        $this->assertEquals('this', $key[0]);
        $this->assertEquals('is', $key[1]);
        $this->assertEquals('file', $key[2][0]);
    }

    public function testGetKeyArray()
    {
        $key = Parser::getKey('this.is.an.array');
        $this->assertCount(3, $key);
        $this->assertCount(2, $key[2]);
        $this->assertEquals('this', $key[0]);
        $this->assertEquals('is', $key[1]);
        $this->assertEquals('an', $key[2][0]);
        $this->assertEquals('array', $key[2][1]);
    }

    public function testGetValue()
    {
        $kayStack = [
            'hi' => [
                'find' => [
                    'this' => 'Hello'
                ]
            ]
        ];
        list($file, $key, $sub) = Parser::getKey('file.hi.find.this');
        $this->assertEquals('Hello', Parser::getValue($kayStack, $key, $sub));
    }
}
