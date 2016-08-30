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

    function it_should_have_integers_as_coordinates()
    {
        $this->beConstructedFromXAndY('-1', 0);
        $this->shouldThrow(\InvalidArgumentException::class)->duringInstantiation();
        $this->beConstructedFromXAndY(0, '-1');
        $this->shouldThrow(\InvalidArgumentException::class)->duringInstantiation();
    }

    function it_should_not_have_negative_coordinates()
    {
        $this->beConstructedFromXAndY(-1, 0);
        $this->shouldThrow(\InvalidArgumentException::class)->duringInstantiation();
        $this->beConstructedFromXAndY(0, -1);
        $this->shouldThrow(\InvalidArgumentException::class)->duringInstantiation();
    }

    function it_should_has_maximum_coordinates()
    {
        $this->beConstructedFromXAndY(11, 0);
        $this->shouldThrow(\InvalidArgumentException::class)->duringInstantiation();
        $this->beConstructedFromXAndY(0, 11);
        $this->shouldThrow(\InvalidArgumentException::class)->duringInstantiation();
    }
}
