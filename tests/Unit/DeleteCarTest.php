<?php

namespace Tests\Unit;
use App\Car;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Car::find(51);
        DB::table('cars')->where('id', '>', 50)->delete();
        $cars = Car::all();
        $this->assertDatabaseMissing('cars', ['id' => '51']);
    }
}
