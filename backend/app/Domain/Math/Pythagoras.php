<?php

namespace App\Domain\Math;

class Pythagoras
{
    /**
     * Calc.
     * 
     * @param float $x
     * @param float $y
     * 
     * @return float
     */
    public static function calc(float $x, float $y): float
    {
        return round(sqrt(pow($x, 2) + pow($y, 2)), 2);
    }
}
