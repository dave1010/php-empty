<?php


namespace Foo;


final class Dependency implements DependencyInterface
{
    public function boolGenerator($numberOfTrues)
    {
        return $numberOfTrues === 1;
    }
}
