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
                                $this->currentPosition->y() + 1
                            );
                            break;
                        case 'W':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x() - 1,
                                $this->currentPosition->y()
                            );
                            break;
                        case 'S':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x(),
                                $this->currentPosition->y() - 1
                            );
                            break;
                        case 'E':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x() + 1,
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
                                $this->currentPosition->y() - 1
                            );
                            break;
                        case 'W':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x() + 1,
                                $this->currentPosition->y()
                            );
                            break;
                        case 'S':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x(),
                                $this->currentPosition->y() + 1
                            );
                            break;
                        case 'E':
                            $this->currentPosition = Position::fromXAndY(
                                $this->currentPosition->x() - 1,
                                $this->currentPosition->y()
                            );
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
}
