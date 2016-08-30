<?php

namespace MarsRover;

final class StartPoint
{
    private $x;

    private $y;

    private function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public static function fromXAndY($x, $y)
    {
        return new self($x, $y);
    }
}
