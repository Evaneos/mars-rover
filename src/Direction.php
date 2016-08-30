<?php

namespace MarsRover;

class Direction
{
    private $direction;

    private function __construct($direction)
    {
        $this->direction = $direction;
    }

    public static function fromDirection($direction)
    {
        return new self($direction);
    }
}
