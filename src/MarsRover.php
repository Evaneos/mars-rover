<?php

namespace MarsRover;

class MarsRover
{
    private $currentPosition;

    private $direction;

    private function __construct(Position $currentPosition, Direction $direction)
    {
        $this->currentPosition = $currentPosition;
        $this->direction = $direction;
    }

    public static function withInitialPositionAndDirection(Position $currentPosition, Direction $direction)
    {
        return new self($currentPosition, $direction);
    }

    public function execute($commands)
    {
        foreach ($commands as $command) {
            switch ($command) {
                case 'f':
                    switch ($this->direction->direction()) {
                        case 'N':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x(),
                                $this->currentPosition->y() === Position::MAX_Y ? 0 : $this->currentPosition->y() + 1
                            );
                            break;
                        case 'W':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x() === 0 ? Position::MAX_X : $this->currentPosition->x() - 1,
                                $this->currentPosition->y()
                            );
                            break;
                        case 'S':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x(),
                                $this->currentPosition->y() === 0 ? Position::MAX_Y : $this->currentPosition->y() - 1
                            );
                            break;
                        case 'E':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x() === Position::MAX_X ? 0 : $this->currentPosition->x() + 1,
                                $this->currentPosition->y()
                            );
                            break;
                    }
                    break;
                case 'b':
                    switch ($this->direction->direction()) {
                        case 'N':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x(),
                                $this->currentPosition->y() === 0 ? Position::MAX_Y : $this->currentPosition->y() - 1
                            );
                            break;
                        case 'W':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x() === Position::MAX_X ? 0 : $this->currentPosition->x() + 1,
                                $this->currentPosition->y()
                            );
                            break;
                        case 'S':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x(),
                                $this->currentPosition->y() === Position::MAX_Y ? 0 : $this->currentPosition->y() + 1
                            );
                            break;
                        case 'E':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x() === 0 ? Position::MAX_X : $this->currentPosition->x() - 1,
                                $this->currentPosition->y()
                            );
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
            }
        }
    }

    public function currentPosition()
    {
        return $this->currentPosition;
    }

    public function direction()
    {
        return $this->direction;
    }
}
