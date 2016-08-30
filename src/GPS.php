<?php

namespace MarsRover;

class GPS
{
    public function calculateState($command, GeographicState $state)
    {
        switch ($command) {
                case 'f':
                    switch ($this->direction->direction()) {
                        case 'N':
                            return GeographicState::withPositionAndDirection(
                                Position::fromXAndY(
                                    $state->position()->x(),
                                    $state->position()->y() === Position::MAX_Y ? 0 : $state->position()->y() + 1
                                ),
                                $state->direction()
                            );
                            break;
                        case 'W':
                            return GeographicState::withPositionAndDirection(
                                Position::fromXAndY(
                                    $state->position()->x() === 0 ? Position::MAX_X : $state->position()->x() - 1,
                                    $state->position()->y()
                                ),
                                $state->direction()
                            );
                            break;
                        case 'S':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x(),
                                $this->currentPosition->y() === 0 ? Position::MAX_Y : $this->currentPosition->y() - 1
                            );
                            break;
                        case 'E':
                            $this->moveRight();
                            break;
                    }
                    break;
                case 'b':
                    switch ($this->direction->direction()) {
                        case 'N':
                            $this->moveDown();
                            break;
                        case 'W':
                            $this->moveRight();
                            break;
                        case 'S':
                            $this->moveUp();
                            break;
                        case 'E':
                            $this->moveLeft();
                            break;
                    }
                    break;
                case 'l':
                    switch ($this->direction->direction()) {
                        case 'N':
                            $this->direction = Direction::fromDirection('W');
                            break;
                        case 'W':
                            $this->direction = Direction::fromDirection('S');
                            break;
                        case 'S':
                            $this->direction = Direction::fromDirection('E');
                            break;
                        case 'E':
                            $this->direction = Direction::fromDirection('N');
                            break;
                    }
                    break;
                case 'r':
                    switch ($this->direction->direction()) {
                        case 'N':
                            $this->direction = Direction::fromDirection('E');
                            break;
                        case 'W':
                            $this->direction = Direction::fromDirection('N');
                            break;
                        case 'S':
                            $this->direction = Direction::fromDirection('W');
                            break;
                        case 'E':
                            $this->direction = Direction::fromDirection('S');
                            break;
                    }
                    break;
                case 'o':
                    $this->report();
                    return;
            }
    }
}