<?php

namespace App\Domain\Math;

class GeographicCoordinate
{
    /** @var float */
    private $data = 0;

    /**
     * Constructor.
     * 
     * @param void
     */
    private function __construct(float $n)
    {
        $this->data = $n;
    }

    /**
     * Get an instance.
     * 
     * @param void
     * 
     * @return Self
     */
    public static function create(float $n)
    {
        return new Self($n);
    }

    /**
     * Degrees.
     * 
     * @param void
     * 
     * @return int
     */
    public function degrees(): int
    {
        return (int) $this->data;
    }

    /**
     * Degrees.
     * 
     * @param void
     * 
     * @return int
     */
    public function minutes(): int
    {
        $n = (float) ($this->data - $this->degrees()) * 60;

        return abs(abs($n) - abs($n) - (int) abs($n)) * (abs($n) === $n ? 1 : -1);
    }

    /**
     * Degrees.
     * 
     * @param void
     * 
     * @return double
     */
    public function seconds(): float
    {
        return number_format((((abs($this->data) - abs($this->degrees())) * 60) - abs($this->minutes())) * 60, 4) * (abs($this->data) === $this->data ? 1 : -1);
    }
}
