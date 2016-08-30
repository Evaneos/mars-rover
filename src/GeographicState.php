<?php

namespace MarsRover;

final class GeographicState
{
    private $position;

    private $direction;

    private function __construct(Position $position, Direction $direction)
    {
        $this->position = $position;
        $this->direction = $direction;
    }

    public static function withPositionAndDirection(Position $position, Direction $direction)
    {
        return new self($position, $direction);
    }

    public function position()
    {
        return $this->position;
    }

    public function direction()
    {
        return $this->direction;
    }
}