<?php

namespace tests\MR\Command;

use \Mockery as m;
use MR\Command\Forward;
use MR\FacingDirection;
use MR\Point;
use MR\Rover;

class BackwardTForwardTestest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Forward
     */
    private $forward;

    protected function setUp()
    {
        $this->forward = new Forward();
    }

    public function testItShouldMoveSouthIfFacingDirectionIsSouth()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::SOUTH)
        );

        $this->forward->execute($rover);

        $this->assertEquals(new Point(0, -1), $rover->getCurrentPoint());
    }

    public function testItShouldMoveNorthIfFacingDirectionIsNorth()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::NORTH)
        );

        $this->forward->execute($rover);

        $this->assertEquals(new Point(0, 1), $rover->getCurrentPoint());
    }

    public function testItShouldMoveWestIfFacingDirectionIsWest()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::WEST)
        );

        $this->forward->execute($rover);

        $this->assertEquals(new Point(-1, 0), $rover->getCurrentPoint());
    }

    public function testItShouldMoveEastIfFacingDirectionIsEast()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::EAST)
        );

        $this->forward->execute($rover);

        $this->assertEquals(new Point(1, 0), $rover->getCurrentPoint());
    }
}
