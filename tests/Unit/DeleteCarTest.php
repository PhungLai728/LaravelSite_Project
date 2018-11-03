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
    public function testExample()
    {
        $deletecar = Car::inRandomOrder()->first();

        $deletecar->delete();

        $this->assertInstanceOf('\App\Car', $deletecar);

    }
}
