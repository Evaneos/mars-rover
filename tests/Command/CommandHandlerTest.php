<?php

namespace tests\MR\Command;

use \Mockery as m;
use MR\Command\Backward;
use MR\Command\CommandHandler;
use MR\Command\CommandInterface;
use MR\Command\Forward;
use MR\FacingDirection;
use MR\Point;
use MR\Rover;

class CommandHandlerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CommandHandler
     */
    private $commandHandler;

    protected function setUp()
    {
        $this->commandHandler = new CommandHandler();
    }

    public function testItShould()
    {
        $rover = new Rover(
            new Point(0, -179),
            new FacingDirection(FacingDirection::NORTH)
        );

        $commands = [
            new Backward(),
            new Backward(),
            new Backward(),
        ];

        $expected = new Rover(
            new Point(0, 2),
            new FacingDirection(FacingDirection::NORTH)
        );

        $this->commandHandler->handle($rover, $commands);

        $this->assertEquals($expected, $rover);
    }
}
