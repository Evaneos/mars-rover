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
}
