<?php

namespace tests\MR;

use MR\Point;

class PointTest extends \PHPUnit_Framework_TestCase
{
    public function testItShouldStoreXAndY()
    {
        $point = new Point(1, 2);

        $this->assertAttributeEquals(1, 'x', $point);
        $this->assertAttributeEquals(2, 'y', $point);
    }
}
