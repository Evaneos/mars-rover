<?php

namespace tests\MR\Command;

use \Mockery as m;
use MR\Command\Forward;
use MR\Command\Left;
use MR\Command\Right;
use MR\FacingDirection;
use MR\Point;
use MR\Rover;

class LeftTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Forward
     */
    private $left;

    protected function setUp()
    {
        $this->left = new Left();
    }

    public function testItShouldFaceNorthIfFacingDirectionIsEast()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::EAST)
        );

        $this->left->execute($rover);

        $this->assertEquals(new FacingDirection(FacingDirection::NORTH), $rover->getFacingDirection());
    }

    public function testItShouldFaceSouthIfFacingDirectionIsWest()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::WEST)
        );

        $this->left->execute($rover);

        $this->assertEquals(new FacingDirection(FacingDirection::SOUTH), $rover->getFacingDirection());
    }

    public function testItShouldFaceWestIfFacingDirectionIsNorth()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::NORTH)
        );

        $this->left->execute($rover);

        $this->assertEquals(new FacingDirection(FacingDirection::WEST), $rover->getFacingDirection());
    }

    public function testItShouldFaceEastIfFacingDirectionIsSouth()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::NORTH)
        );

        $this->left->execute($rover);

        $this->assertEquals(new FacingDirection(FacingDirection::WEST), $rover->getFacingDirection());
    }
}
