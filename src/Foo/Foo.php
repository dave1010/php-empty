<?php

namespace Foo;

final class Foo implements FooInterface
{
    /**
     * {@inheritdoc}
     */
    public function bar()
    {
        return true;
    }
}
