<?php

namespace tests\MR\Command;

use \Mockery as m;
use MR\Command\Backward;
use MR\Command\CommandHandler;
use MR\Command\CommandInterface;
use MR\FacingDirection;
use MR\Point;
use MR\Rover;

class BackwardTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Backward
     */
    private $backward;

    protected function setUp()
    {
        $this->backward = new Backward();
    }

    public function testItShouldMoveSouthIfFacingDirectionIsNorth()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::NORTH)
        );

        $this->backward->execute($rover);

        $this->assertEquals(new Point(0, -1), $rover->getCurrentPoint());
    }

    public function testItShouldMoveNorthIfFacingDirectionIsSouth()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::SOUTH)
        );

        $this->backward->execute($rover);

        $this->assertEquals(new Point(0, 1), $rover->getCurrentPoint());
    }

    public function testItShouldMoveWestIfFacingDirectionIsEast()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::EAST)
        );

        $this->backward->execute($rover);

        $this->assertEquals(new Point(-1, 0), $rover->getCurrentPoint());
    }

    public function testItShouldMoveEastIfFacingDirectionIsWest()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::WEST)
        );

        $this->backward->execute($rover);

        $this->assertEquals(new Point(1, 0), $rover->getCurrentPoint());
    }
}
