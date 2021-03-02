<?php

namespace App\Domain\Math;

class Geolocator
{
    /** @var \App\Domain\Math\GPS */
    private \App\Domain\Math\GPS $posx;

    /** @var \App\Domain\Math\GPS */
    private \App\Domain\Math\GPS $posy;

    /**
     * Constructor.
     * 
     * @param void
     */
    private function __construct(
        \App\Domain\Math\GPS $posx,
        \App\Domain\Math\GPS $posy
    ) {
        $this->posx = $posx;
        $this->posy = $posy;
    }

    /**
     * Get an instance.
     * 
     * @param void
     * 
     * @return Self
     */
    public static function create(
        \App\Domain\Math\GPS $posx,
        \App\Domain\Math\GPS $posy
    ): Self {
        return new Self($posx, $posy);
    }

    /**
     * DLA.
     * 
     * @param void
     * 
     * @return float
     */
    private function dla(): float
    {
        return (($this->posx->lat() - $this->posy->lat()) * 60 * 60);
    }

    /**
     * DLA.
     * 
     * @param void
     * 
     * @return float
     */
    private function dlo(): float
    {
        return (($this->posx->lng() - $this->posy->lng()) * 60 * 60);
    }

    /**
     * Get the distance beetwen two points.
     * 
     * @param void
     * 
     * @return float
     */
    public function arc2dist(): float
    {
        return \App\Domain\Math\Pythagoras::calc(($this->dla() / 60) * 1852, ($this->dlo() / 60) * 1852);
    }
}
