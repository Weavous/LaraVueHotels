<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class GeolocatorTest extends TestCase
{
    /**
     * Tests the calculation of the positives distance.
     *
     * @return void
     */
    public function test_positive_distance_calc()
    {
        $x = \App\Domain\Math\GPS::create(23.51014, 46.64247);
        $y = \App\Domain\Math\GPS::create(23.50831, 46.63139);

        $this->assertEquals(\App\Domain\Math\Geolocator::create($x, $y)->arc2dist(), 1247.89);
    }

    /**
     * Tests the calculation of the negatives distance.
     *
     * @return void
     */
    public function test_negative_distance_calc()
    {
        $x = \App\Domain\Math\GPS::create(-29.7121501, -51.1192845);
        $y = \App\Domain\Math\GPS::create(-29.7059957, -51.1224042);

        $this->assertEquals(\App\Domain\Math\Geolocator::create($x, $y)->arc2dist(), 766.72);
    }
}