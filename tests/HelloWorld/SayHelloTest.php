<?php

use HelloWorld\SayHello;

class SayHelloTest extends \PHPUnit\Framework\TestCase
{
    public function testWorld()
    {
        $sayHello = new SayHello();
        $this->assertEquals($sayHello->world(), 'Hello World, Composer!');
    }
}
