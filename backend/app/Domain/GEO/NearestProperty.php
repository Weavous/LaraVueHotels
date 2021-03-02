<?php

namespace App\Domain\GEO;

class NearestProperty
{
    public function index(float $lat, float $lng)
    {
        $data = [];

        foreach (\App\Models\Property::all() as $property) {
            $x = \App\Domain\Math\GPS::create($property->lat, $property->lng);
            $y = \App\Domain\Math\GPS::create($lat, $lng);

            if (\App\Domain\Math\Geolocator::create($x, $y)->arc2dist() < 50000) {
                $data[] = $property;
            }

            if (count($data) === 4) {
                return $data;
            }
        }

        return $data;
    }
}
