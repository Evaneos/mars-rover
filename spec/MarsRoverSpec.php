<?php

namespace spec\MarsRover;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use MarsRover\MarsRover;
use MarsRover\Position;
use MarsRover\Direction;
use MarsRover\Command;

class MarsRoverSpec extends ObjectBehavior
{
    function let()
    {
        $initialPosition = Position::fromXAndY(0,0);
        $direction = Direction::fromDirection('N');
        $this->beConstructedWithInitialPositionAndDirection($initialPosition, $direction);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(MarsRover::class);
    }

    function it_should_move_forward_from_north()
    {
        $initialPosition = Position::fromXAndY(0,0);
        $direction = Direction::fromDirection('N');
        $this->beConstructedWithInitialPositionAndDirection($initialPosition, $direction);
        $this->execute(['f']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(1);
    }

    function it_should_move_forward_from_west()
    {
        $initialPosition = Position::fromXAndY(0,0);
        $direction = Direction::fromDirection('W');
        $this->beConstructedWithInitialPositionAndDirection($initialPosition, $direction);
        $this->execute(['f']);
        $this->currentPosition()->x()->shouldReturn(-1);
        $this->currentPosition()->y()->shouldReturn(0);
    }

    function it_should_move_forward_from_south()
    {
        $initialPosition = Position::fromXAndY(0,0);
        $direction = Direction::fromDirection('S');
        $this->beConstructedWithInitialPositionAndDirection($initialPosition, $direction);
        $this->execute(['f']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(-1);
    }

    function it_should_move_forward_from_east()
    {
        $initialPosition = Position::fromXAndY(0,0);
        $direction = Direction::fromDirection('E');
        $this->beConstructedWithInitialPositionAndDirection($initialPosition, $direction);
        $this->execute(['f']);
        $this->currentPosition()->x()->shouldReturn(1);
        $this->currentPosition()->y()->shouldReturn(0);
    }

    function it_should_move_backward_from_north()
    {
        $initialPosition = Position::fromXAndY(0,0);
        $direction = Direction::fromDirection('N');
        $this->beConstructedWithInitialPositionAndDirection($initialPosition, $direction);
        $this->execute(['b']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(-1);
    }

    function it_should_move_backward_from_west()
    {
        $initialPosition = Position::fromXAndY(0,0);
        $direction = Direction::fromDirection('W');
        $this->beConstructedWithInitialPositionAndDirection($initialPosition, $direction);
        $this->execute(['b']);
        $this->currentPosition()->x()->shouldReturn(1);
        $this->currentPosition()->y()->shouldReturn(0);
    }

    function it_should_move_backward_from_south()
    {
        $initialPosition = Position::fromXAndY(0,0);
        $direction = Direction::fromDirection('S');
        $this->beConstructedWithInitialPositionAndDirection($initialPosition, $direction);
        $this->execute(['b']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(1);
    }

    function it_should_move_backward_from_east()
    {
        $initialPosition = Position::fromXAndY(0,0);
        $direction = Direction::fromDirection('E');
        $this->beConstructedWithInitialPositionAndDirection($initialPosition, $direction);
        $this->execute(['b']);
        $this->currentPosition()->x()->shouldReturn(-1);
        $this->currentPosition()->y()->shouldReturn(0);
    }

    function it_should_move_left_from_north()
    {
        $initialPosition = Position::fromXAndY(0,0);
        $direction = Direction::fromDirection('N');
        $this->beConstructedWithInitialPositionAndDirection($initialPosition, $direction);
        $this->execute(['l']);
        $this->currentPosition()->x()->shouldReturn(-1);
        $this->currentPosition()->y()->shouldReturn(0);
    }

    function it_should_move_left_from_west()
    {
        $initialPosition = Position::fromXAndY(0,0);
        $direction = Direction::fromDirection('W');
        $this->beConstructedWithInitialPositionAndDirection($initialPosition, $direction);
        $this->execute(['l']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(-1);
    }

    function it_should_move_left_from_south()
    {
        $initialPosition = Position::fromXAndY(0,0);
        $direction = Direction::fromDirection('S');
        $this->beConstructedWithInitialPositionAndDirection($initialPosition, $direction);
        $this->execute(['l']);
        $this->currentPosition()->x()->shouldReturn(1);
        $this->currentPosition()->y()->shouldReturn(0);
    }

    function it_should_move_left_from_east()
    {
        $initialPosition = Position::fromXAndY(0,0);
        $direction = Direction::fromDirection('E');
        $this->beConstructedWithInitialPositionAndDirection($initialPosition, $direction);
        $this->execute(['l']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(1);
    }
}
