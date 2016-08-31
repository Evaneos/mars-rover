<?php

namespace tests\MR\Command;

use \Mockery as m;
use MR\Command\Forward;
use MR\Command\Right;
use MR\FacingDirection;
use MR\Point;
use MR\Rover;

class RightTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Forward
     */
    private $right;

    protected function setUp()
    {
        $this->right = new Right();
    }

    public function testItShouldFaceSouthIfFacingDirectionIsEast()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::EAST)
        );

        $this->right->execute($rover);

        $this->assertEquals(new FacingDirection(FacingDirection::SOUTH), $rover->getFacingDirection());
    }

    public function testItShouldFaceNorthIfFacingDirectionIsWest()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::WEST)
        );

        $this->right->execute($rover);

        $this->assertEquals(new FacingDirection(FacingDirection::NORTH), $rover->getFacingDirection());
    }

    public function testItShouldFaceEastIfFacingDirectionIsNorth()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::NORTH)
        );

        $this->right->execute($rover);

        $this->assertEquals(new FacingDirection(FacingDirection::EAST), $rover->getFacingDirection());
    }

    public function testItShouldFaceWestIfFacingDirectionIsSouth()
    {
        $rover = new Rover(
            new Point(0, 0),
            new FacingDirection(FacingDirection::SOUTH)
        );

        $this->right->execute($rover);

        $this->assertEquals(new FacingDirection(FacingDirection::WEST), $rover->getFacingDirection());
    }
}
