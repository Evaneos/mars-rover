<?php

namespace spec\MarsRover;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use MarsRover\MarsRover;
use MarsRover\StartPoint;
use MarsRover\Direction;

class MarsRoverSpec extends ObjectBehavior
{
    function let()
    {
        $startPoint = StartPoint::fromXAndY(0,0);
        $direction = Direction::fromDirection('N');
        $this->beConstructedWithStartPointAndDirection($startPoint, $direction);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(MarsRover::class);
    }
}
