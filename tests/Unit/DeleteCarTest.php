<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteCar()
    {
        $deletecar = Car::all()->find(51);

        $deletecar->delete();

      //  $this->assertTrue($deletecar->delete());

        $this->assertInstanceOf('\App\Car', $deletecar);

    }
}
