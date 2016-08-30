<?php

namespace spec\MarsRover;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use MarsRover\StartPoint;

class StartPointSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedFromXAndY(0,0);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(StartPoint::class);
    }
}
