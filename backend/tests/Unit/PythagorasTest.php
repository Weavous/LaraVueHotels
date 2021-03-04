<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class PythagorasTest extends TestCase
{
    /**
     * A basic Pythagoras calculation test.
     *
     * @return void
     */
    public function test_pythagoras()
    {
        $this->assertEquals(\App\Domain\Math\Pythagoras::calc(3, 4), 5);
        $this->assertEquals(\App\Domain\Math\Pythagoras::calc(20, 99), 101);
        $this->assertEquals(\App\Domain\Math\Pythagoras::calc(60, 91), 109);
        $this->assertEquals(\App\Domain\Math\Pythagoras::calc(15, 112), 113);
        $this->assertEquals(\App\Domain\Math\Pythagoras::calc(44, 117), 125);
        $this->assertEquals(\App\Domain\Math\Pythagoras::calc(88, 105), 137);
        $this->assertEquals(\App\Domain\Math\Pythagoras::calc(17, 144), 145);
        $this->assertEquals(\App\Domain\Math\Pythagoras::calc(24, 143), 145);
        $this->assertEquals(\App\Domain\Math\Pythagoras::calc(51, 140), 149);
    }
}
