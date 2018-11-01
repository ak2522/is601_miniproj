<?php
use Illuminate\Database\Seeder;
use App\User;
use App\Car;
class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::All();
        $users->each(function ($user) {
            $car = factory(\App\Car::class)->make();
            $user->cars()->save($car);
        });
    }
}
