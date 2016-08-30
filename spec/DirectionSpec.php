<?php

namespace spec\MarsRover;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use MarsRover\Direction;

class DirectionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedFromDirection('N');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Direction::class);
    }
}
