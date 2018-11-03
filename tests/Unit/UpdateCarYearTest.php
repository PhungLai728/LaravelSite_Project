<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class UpdateCarYearTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $updatecar = Car::inRandomOrder()->first();

        $updatecar->year = 2000;

        $updatecar->save();

        $this ->assertDatabaseHas('cars',['year'=> $updatecar->year]);
    }
}
