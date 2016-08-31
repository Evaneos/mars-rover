<?php

namespace MR;

use Webmozart\Assert\Assert;

class FacingDirection
{
    const NORTH = 'N';
    const SOUTH = 'S';
    const EAST = 'E';
    const WEST = 'W';

    /**
     * @var string
     */
    private $direction;

    /**
     * @param string $direction
     */
    public function __construct($direction)
    {
        Assert::oneOf($direction, ['N', 'S', 'E', 'W']);

        $this->direction = $direction;
    }

    function __toString()
    {
        return $this->direction;
    }

    public function setDirection($direction)
    {
        Assert::oneOf($direction, ['N', 'S', 'E', 'W']);
        $this->direction = $direction;
    }
}
