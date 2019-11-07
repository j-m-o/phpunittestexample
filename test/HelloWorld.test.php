<?php

namespace JMo\TestComposer;

class HelloWorldTest extends \PHPUnit_Framework_TestCase {
    public function testTrueIsTrue() {
        $this->assertTrue(true);
    }

    public function testInstanceOf() {
        $hw = new HelloWorld();
        $this->assertInstanceOf("JMo\\TestComposer\\Lmao", $hw);
    }
}
