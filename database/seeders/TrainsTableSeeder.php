<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->randomElement(['Italo', 'Trenitalia']);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_date = $faker->dateTimeBetween('-1 day', '+1 week');
            $train->arrival_date = $faker->dateTimeBetween('-1 day', '+1 week');
            while ($train->arrival_date < $train->departure_date) {
                $train->arrival_date = $faker->dateTimeBetween('-1 day', '+1 week');
            }
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            while ($train->arrival_time < $train->departure_time) {
                $train->arrival_time = $faker->time();
            }
            $train->train_code = $faker->numberBetween(10000, 19999);
            $train->carriages_number = $faker->randomDigit();
            $train->on_time = $faker->boolean();
            $train->canceled = $faker->boolean();
            $train->save();
        }

        /*  $trains = config('db.trains');

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_date = $train['departure_date'];
            $newTrain->arrival_date = $train['arrival_date'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->carriages_number = $train['carriages_number'];
            $newTrain->on_time = $train['on_time'];
            $newTrain->canceled = $train['canceled'];
            $newTrain->save();
        } */
    }
}
