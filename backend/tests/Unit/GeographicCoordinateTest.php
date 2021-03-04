<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class GeographicCoordinateTest extends TestCase
{
    /**
     * Tests if we can get the correct latitude.
     *
     * @return void
     */
    public function test_lat()
    {
        $lat = \App\Domain\Math\GeographicCoordinate::create(-29.7123751);

        $this->assertEquals($lat->degrees(), -29);
        $this->assertEquals($lat->minutes(), -42);
        $this->assertEquals($lat->seconds(), -44.5504);
    }

    /**
     * Tests if we can get the correct longitude.
     *
     * @return void
     */
    public function test_lng()
    {
        $lng = \App\Domain\Math\GeographicCoordinate::create(-51.1191654);

        $this->assertEquals($lng->degrees(), -51);
        $this->assertEquals($lng->minutes(), -7);
        $this->assertEquals($lng->seconds(), -8.9954);
    }
}
