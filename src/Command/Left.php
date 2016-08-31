<?php

namespace MR\Command;

use MR\FacingDirection;
use MR\Rover;

class Left implements CommandInterface
{
    public function execute(Rover $rover)
    {
        switch ((string) $rover->getFacingDirection()) {
            case FacingDirection::NORTH :
                $rover->faceWest();

                break;
            case FacingDirection::SOUTH :
                $rover->faceEast();

                break;
            case FacingDirection::EAST :
                $rover->faceNorth();

                break;
            case FacingDirection::WEST :
                $rover->faceSouth();

                break;
        }
    }
}
