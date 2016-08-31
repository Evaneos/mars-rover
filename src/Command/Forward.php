<?php

namespace MR\Command;

use MR\FacingDirection;
use MR\Rover;

class Forward implements CommandInterface
{
    public function execute(Rover $rover)
    {
        switch ((string) $rover->getFacingDirection()) {
            case FacingDirection::NORTH :
                $rover->moveNorth();

                break;
            case FacingDirection::SOUTH :
                $rover->moveSouth();

                break;
            case FacingDirection::EAST :
                $rover->moveEast();

                break;
            case FacingDirection::WEST :
                $rover->moveWest();

                break;
        }
    }
}
