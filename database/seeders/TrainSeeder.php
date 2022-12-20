<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->company = $faker->randomElement(['Trenord', 'TrenItalia', 'PolarExpress',]);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('05:00', '12:00')->format('H:i');
            $train->arrival_time = $faker->dateTimeBetween('12:00', '24:00')->format('H:i');
            $train->train_code = $faker->bothify('??-#####');
            $train->coaches_number = $faker->numberBetween(1, 8);
            $train->in_time = $faker->randomElement([true, false]);
            $train->deleted = $faker->randomElement([true, false]);
            $train->save();
        }
    }
}
