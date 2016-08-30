<?php

namespace spec\MarsRover;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use MarsRover\MarsRover;
use MarsRover\StartPoint;
use MarsRover\Direction;
use MarsRover\Command;

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

    function it_should_move_forward_from_north()
    {
        $startPoint = StartPoint::fromXAndY(0,0);
        $direction = Direction::fromDirection('N');
        $this->beConstructedWithStartPointAndDirection($startPoint, $direction);
        $this->execute(['f']);
        $this->startPoint()->x()->shouldReturn(0);
        $this->startPoint()->y()->shouldReturn(1);
    }

    function it_should_move_forward_from_west()
    {
        $startPoint = StartPoint::fromXAndY(0,0);
        $direction = Direction::fromDirection('W');
        $this->beConstructedWithStartPointAndDirection($startPoint, $direction);
        $this->execute(['f']);
        $this->startPoint()->x()->shouldReturn(-1);
        $this->startPoint()->y()->shouldReturn(0);
    }

    function it_should_move_forward_from_south()
    {
        $startPoint = StartPoint::fromXAndY(0,0);
        $direction = Direction::fromDirection('S');
        $this->beConstructedWithStartPointAndDirection($startPoint, $direction);
        $this->execute(['f']);
        $this->startPoint()->x()->shouldReturn(0);
        $this->startPoint()->y()->shouldReturn(-1);
    }

    function it_should_move_forward_from_east()
    {
        $startPoint = StartPoint::fromXAndY(0,0);
        $direction = Direction::fromDirection('E');
        $this->beConstructedWithStartPointAndDirection($startPoint, $direction);
        $this->execute(['f']);
        $this->startPoint()->x()->shouldReturn(1);
        $this->startPoint()->y()->shouldReturn(0);
    }
}
