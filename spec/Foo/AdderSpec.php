<?php

namespace spec\Foo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AdderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Foo\Adder');
    }

    function it_gets_two_when_adding_one_and_one()
    {
        $this->add(1, 1)->shouldReturn(2);
    }
}
