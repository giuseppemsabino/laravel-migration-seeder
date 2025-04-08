<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 20;$i++){

            $newTrain = new Train();
    
            $newTrain->train_company = $faker->company(); 
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->unique()->regexify('[A-Z]{2}[0-9]{4}');
            $newTrain->train_cars = $faker->numberBetween(1, 20);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_cancelled = $faker->boolean();
    
            $newTrain->save();
        }
    }
}
