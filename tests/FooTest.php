<?php


namespace Foo;


class FooTest extends \PHPUnit_Framework_TestCase {
    public function testBar()
    {
        $foo = new Foo;

        $this->assertTrue($foo->bar());
    }
}
