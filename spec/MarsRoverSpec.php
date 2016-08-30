<?php

namespace spec\MarsRover;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use MarsRover\MarsRover;
use MarsRover\Position;
use MarsRover\Direction;
use MarsRover\Command;
use MarsRover\GeographicState;

class MarsRoverSpec extends ObjectBehavior
{
    function let()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('N'));
        $this->beConstructedFromInitialState($state);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(MarsRover::class);
    }

    function it_should_move_forward_from_north()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('N'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['f']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(1);
    }

    function it_should_move_forward_from_west()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('W'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['f']);
        $this->currentPosition()->x()->shouldReturn(10);
        $this->currentPosition()->y()->shouldReturn(0);
    }

    function it_should_move_forward_from_south()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('S'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['f']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(10);
    }

    function it_should_move_forward_from_east()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('E'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['f']);
        $this->currentPosition()->x()->shouldReturn(1);
        $this->currentPosition()->y()->shouldReturn(0);
    }

    function it_should_move_backward_from_north()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('N'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['b']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(10);
    }

    function it_should_move_backward_from_west()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('W'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['b']);
        $this->currentPosition()->x()->shouldReturn(1);
        $this->currentPosition()->y()->shouldReturn(0);
    }

    function it_should_move_backward_from_south()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('S'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['b']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(1);
    }

    function it_should_move_backward_from_east()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('E'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['b']);
        $this->currentPosition()->x()->shouldReturn(10);
        $this->currentPosition()->y()->shouldReturn(0);
    }

    function it_should_turn_left_from_north()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('N'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['l']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(0);
        $this->direction()->direction()->shouldReturn('W');
    }

    function it_should_turn_left_from_west()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('W'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['l']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(0);
        $this->direction()->direction()->shouldReturn('S');
    }

    function it_should_turn_left_from_south()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('S'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['l']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(0);
        $this->direction()->direction()->shouldReturn('E');
    }

    function it_should_turn_left_from_east()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('E'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['l']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(0);
        $this->direction()->direction()->shouldReturn('N');
    }

    function it_should_turn_right_from_north()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('N'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['r']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(0);
        $this->direction()->direction()->shouldReturn('E');
    }

    function it_should_turn_right_from_west()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('W'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['r']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(0);
        $this->direction()->direction()->shouldReturn('N');
    }

    function it_should_turn_right_from_south()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('S'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['r']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(0);
        $this->direction()->direction()->shouldReturn('W');
    }

    function it_should_turn_right_from_east()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('E'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['r']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(0);
        $this->direction()->direction()->shouldReturn('S');
    }

    function it_should_stop_on_obstacle_and_report()
    {
        $state = GeographicState::withPositionAndDirection(Position::fromXAndY(0,0), Direction::fromDirection('N'));
        $this->beConstructedFromInitialState($state);
        $this->execute(['o', 'f']);
        $this->currentPosition()->x()->shouldReturn(0);
        $this->currentPosition()->y()->shouldReturn(0);
        $this->direction()->direction()->shouldReturn('N');
        $this->getObstacleReport()->shouldReturn([$initialPosition]);
    }
}
