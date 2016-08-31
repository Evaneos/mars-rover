<?php

namespace MR\Command;

use MR\FacingDirection;
use MR\Rover;

class Backward implements CommandInterface
{
    public function execute(Rover $rover)
    {
        switch ((string) $rover->getFacingDirection()) {
            case FacingDirection::NORTH :
                $rover->moveSouth();

                break;
            case FacingDirection::SOUTH :
                $rover->moveNorth();

                break;
            case FacingDirection::EAST :
                $rover->moveWest();

                break;
            case FacingDirection::WEST :
                $rover->moveEast();

                break;
        }
    }
}
