<?php

namespace MR\Command;

use MR\FacingDirection;
use MR\Rover;

class Right implements CommandInterface
{
    public function execute(Rover $rover)
    {
        switch ((string) $rover->getFacingDirection()) {
            case FacingDirection::NORTH :
                $rover->faceEast();

                break;
            case FacingDirection::SOUTH :
                $rover->faceWest();

                break;
            case FacingDirection::EAST :
                $rover->faceSouth();

                break;
            case FacingDirection::WEST :
                $rover->faceNorth();

                break;
        }
    }
}
