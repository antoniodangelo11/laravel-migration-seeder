<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker) 
    {
        for ($i = 0; $i <= 100; $i++) {
            Train::create
            ([
                'company' => $faker->bothify('??-########'),
                'departure_station' => $faker->city(),
                'arrival_station' =>  $faker->city('######'),
                'departure_time' => $faker->city(),
                'arrival_time' => $faker->state(),
                'train_code' => rand(25, 300),
                'number_of_carriages' => rand(1, 25),
                'in_time' => rand(1, 4),
                'deleted' => $faker->randomElement(),
            ]);
        }
    }
}
