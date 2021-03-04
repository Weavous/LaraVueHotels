<?php

declare(strict_types=1);

namespace App\Domain\Math;

class GeographicCoordinate
{
    /** @var float */
    private float $data = 0;

    /**
     * Constructor.
     * 
     * @param float $n
     */
    private function __construct(float $n)
    {
        $this->data = $n;
    }

    /**
     * Get an instance.
     * 
     * @param float $n
     * 
     * @return Self
     */
    public static function create(float $n): Self
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
        return (int) abs(($this->data - $this->degrees()) * 60) * $this->signal();
    }

    /**
     * Degrees.
     * 
     * @param void
     * 
     * @return float
     */
    public function seconds(): float
    {
        return number_format((((abs($this->data) - abs($this->degrees())) * 60) - abs($this->minutes())) * 60, 4) * $this->signal();
    }

    /**
     * Signal.
     * 
     * @param void
     * 
     * @return int
     */
    private function signal(): int
    {
        return abs($this->data) === $this->data ? 1 : -1;
    }
}
