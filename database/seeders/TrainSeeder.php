<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {

            $train = new Train();
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_date = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->departure_time = $faker->time();
            $train->arrival_date = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->ean13();
            $train->number_of_carriages = $faker->numberBetween(1, 20);
            $train->is_on_time = $faker->boolean();
            $train->is_deleted = $faker->boolean();
            $train->save();
        }
    }
}
