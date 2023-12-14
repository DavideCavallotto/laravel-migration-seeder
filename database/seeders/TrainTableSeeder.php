<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++ ) {
            $new_train = new Train();

            $new_train->company = $faker->randomElement(['Trenitalia SpA', 'Trenord SpA', 'Rail Italy Srl', 'ATAC SpA', 'ATCM SpA','Ventarail Srl']);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTimeBetween('-7 day', '+7 days');
            $new_train->arrival_time = $faker->dateTimeBetween('+7 days', '+9 days');
            $new_train->train_code = $faker->numerify('#####');
            $new_train->number_of_carriages = $faker->numberBetween(2,9);
            $new_train->on_time = $faker->numberBetween(0,1);
            $new_train->cancelled = $faker->numberBetween(0,1);
            
            $new_train->save();
        }
    }
}
