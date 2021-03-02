<?php

namespace App\Domain\Math;

class GPS
{
    /** @var float */
    private $lat = 0;

    /** @var float */
    private $lng = 0;

    /**
     * Get an instance.
     * 
     * @param float $lat
     * @param float $lng
     * 
     * @return Self
     */
    private function __construct(float $lat, float $lng)
    {
        $this->lat = $lat;
        $this->lng = $lng;
    }

    /**
     * Get an instance.
     * 
     * @param float $lat
     * @param float $lng
     * 
     * @return Self
     */
    public static function create(float $lat, float $lng): Self
    {
        return new Self($lat, $lng);
    }

    /**
     * Latitude.
     * 
     * @param void
     * 
     * @return float
     */
    public function lat(): float
    {
        return $this->lat;
    }

    /**
     * Longitude.
     * 
     * @param void
     * 
     * @return float
     */
    public function lng(): float
    {
        return $this->lng;
    }
}
