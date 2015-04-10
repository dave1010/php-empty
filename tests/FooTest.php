<?php

namespace Foo;

class FooTest extends \PHPUnit_Framework_TestCase {

    public function testDummy()
    {
        $dependency = $this->prophesize(\Foo\DependencyInterface::class);

        $foo = new Foo($dependency->reveal());

        $this->assertTrue($foo->bar());
    }

    public function testStub()
    {
        $dependency = $this->prophesize(\Foo\DependencyInterface::class);
        $dependency->boolGenerator(1)->willReturn(true);
        $foo = new Foo($dependency->reveal());

        $this->assertTrue($foo->baz());
    }

    public function testMock()
    {
        $dependency = $this->prophesize(\Foo\DependencyInterface::class);
        $foo = new Foo($dependency->reveal());

        $foo->baz();

        $dependency->boolGenerator(1)->shouldBeCalled();
    }

    public function testSpy()
    {
        $dependency = $this->prophesize(\Foo\DependencyInterface::class);
        $foo = new Foo($dependency->reveal());

        $foo->baz();

        $dependency->boolGenerator(1)->shouldHaveBeenCalled();
    }

}
