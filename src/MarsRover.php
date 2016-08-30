<?php

namespace MarsRover;

class MarsRover
{
    private $startPoint;

    private $direction;

    private function __construct(StartPoint $startPoint, Direction $direction)
    {
        $this->startPoint = $startPoint;
        $this->direction = $direction;
    }

    public static function withStartPointAndDirection(StartPoint $startPoint, Direction $direction)
    {
        return new self($startPoint, $direction);
    }

    public function execute($commands)
    {
        foreach ($commands as $command) {
            switch ($command) {
                case 'f':
                    switch ($this->direction->direction()) {
                        case 'N':
                            $this->startPoint = StartPoint::fromXAndY(
                                $this->startPoint->x(),
                                $this->startPoint->y() + 1
                            );
                            break;
                        case 'W':
                            $this->startPoint = StartPoint::fromXAndY(
                                $this->startPoint->x() - 1,
                                $this->startPoint->y()
                            );
                            break;
                        case 'S':
                            $this->startPoint = StartPoint::fromXAndY(
                                $this->startPoint->x(),
                                $this->startPoint->y() - 1
                            );
                            break;
                        case 'E':
                            $this->startPoint = StartPoint::fromXAndY(
                                $this->startPoint->x() + 1,
                                $this->startPoint->y()
                            );
                            break;
                    }
                    break;
            }
        }
    }

    public function startPoint()
    {
        return $this->startPoint;
    }
}
