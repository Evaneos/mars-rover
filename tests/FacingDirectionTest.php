<?php

namespace tests\MR;

use MR\FacingDirection;

class FacingDirectionTest extends \PHPUnit_Framework_TestCase
{
    public function testItShouldThrowIfNotValidDirection()
    {
        $this->expectException(\InvalidArgumentException::class);

        new FacingDirection('A');
    }

    public function testItShouldStoreDirection()
    {
        $facingDirection = new FacingDirection('N');

        $this->assertAttributeEquals('N', 'direction', $facingDirection);
    }
}
