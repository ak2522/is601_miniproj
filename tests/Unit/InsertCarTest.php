<?php

namespace Tests\Unit;
use \App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = factory(\App\Car::class)->make();
        $this->assertDatabaseHas('cars', ["make" => "Ford"]);
    }
}
