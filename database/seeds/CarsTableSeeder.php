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
        factory(App\User::class, 50)->create()->each(function ($u) {
            $u->cars()->save(factory(App\Car::class)->make());
        });
    }
}
