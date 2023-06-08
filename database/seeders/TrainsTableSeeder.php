<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Fake $faker )
    {
        $company = ['Trenitalia','Ferrovie dello Stato', 'Italo', 'Freccia Rossa'];

        for ($i=0; $i < 10; $i++) {
            $new_train = new Train();
            $new_train -> company = $faker->randomElement($company);
            $new_train -> start_station = $faker->city;
            $new_train -> end_station = $faker->city;
            $new_train -> start_time = $faker->time;
            $new_train -> arrival_time = $faker->time;
            $new_train -> train_code = $faker->bothify('#####');
            $new_train -> carriages_number = $faker->numberBetween(1, 10);
            $new_train -> on_time = 0;
            $new_train -> deleted = 0;
            $new_train -> save();
        }
    }
}
