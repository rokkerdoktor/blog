<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class TermekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('App\Termek');
        DB::table('Termek')->insert(
            [
                'name' => $faker->sentence,
                'amount' => $faker->unique()->randomNumber($nbDigits = 2),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]
        );
    }
}
