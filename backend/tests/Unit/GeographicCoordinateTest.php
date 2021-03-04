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

    /**
     * Tests 180 degree conversion.
     * 
     * @param void
     */
    public function test_180_degrees()
    {
        $test_180_degrees = \App\Domain\Math\GeographicCoordinate::create(180);

        $this->assertEquals($test_180_degrees->degrees(), 180);
        $this->assertEquals($test_180_degrees->minutes(), 0);
        $this->assertEquals($test_180_degrees->seconds(), 0);
    }

    /**
     * Tests 0 degree conversion.
     * 
     * @param void
     */
    public function test_0_degrees()
    {
        $test_0_degrees = \App\Domain\Math\GeographicCoordinate::create(0);

        $this->assertEquals($test_0_degrees->degrees(), 0);
        $this->assertEquals($test_0_degrees->minutes(), 0);
        $this->assertEquals($test_0_degrees->seconds(), 0);
    }
}
