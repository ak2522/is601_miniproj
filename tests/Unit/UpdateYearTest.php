<?php

namespace Tests\Unit;
use \App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateYearTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateYear()
    {
        $cars = Car::all();
        $car = Car::find(10);
        $car->year = '2000';
        $car->save();
        $this->assertDatabaseHas('cars', ["year" => '2000']);
    }
}
