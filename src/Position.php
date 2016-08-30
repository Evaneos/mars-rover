<?php

namespace MarsRover;

use Assert\Assertion;

final class Position
{
    const MAX_X = 10;
    const MAX_Y = 10;

    private $x;

    private $y;

    private function __construct($x, $y)
    {
        Assertion::integer($x);
        Assertion::greaterThan($x, -1);
        Assertion::lessOrEqualThan($x, self::MAX_X);
        Assertion::integer($y);
        Assertion::greaterThan($y, -1);
        Assertion::lessOrEqualThan($y, self::MAX_Y);

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
