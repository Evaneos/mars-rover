<?php

namespace MarsRover;

final class Position
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

    public function x()
    {
        return $this->x;
    }

    public function y()
    {
        return $this->y;
    }
}
