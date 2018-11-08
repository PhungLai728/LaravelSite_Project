<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CountCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
//        public function testExample()
//    {
//        $this->assertTrue(true);
//    }
    public function testCountCar()
    {
        $car = Car::All();
        $carCount = $car->count();
//        dd($carCount);
        $this->assertEquals(51,$carCount);
    }
}
