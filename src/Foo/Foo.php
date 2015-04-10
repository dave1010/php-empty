<?php

namespace Foo;

final class Foo implements FooInterface
{
    /** @var DependencyInterface */
    private $dependency;

    public function __construct(DependencyInterface $dependency)
    {

        $this->dependency = $dependency;
    }

    /**
     * {@inheritdoc}
     */
    public function bar()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function baz()
    {
        return $this->dependency->boolGenerator(1);
    }
}
