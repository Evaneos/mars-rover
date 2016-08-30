<?php

namespace spec\MarsRover;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use MarsRover\Position;

class PositionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedFromXAndY(0,0);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Position::class);
    }

    function it_should_get_x()
    {
        $this->x()->shouldReturn(0);
    }

    function it_should_get_y()
    {
        $this->y()->shouldReturn(0);
    }
}