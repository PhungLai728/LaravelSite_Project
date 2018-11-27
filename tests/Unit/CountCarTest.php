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

    use RefreshDatabase;
    public function testCountCar()
    {
//        factory(\App\Car::class, 50)->create()->each(function ($car) {
//            $car->posts()->save(factory(\App\Car::class)->make());
//        });



        $car = \App\Car::all();
        $carCount = \App\Car::all()->count();
        $this->assertEquals(50,$carCount);
    }
}
