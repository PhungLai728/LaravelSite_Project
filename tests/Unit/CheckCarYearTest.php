<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CheckCarYearTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testExample()
    {
        $carYear = Car::inRandomOrder()->first();
        $caryear = (int)$carYear->year;
        $this->assertInternalType('int', $caryear);
    }
}
